<?

//    Copyright (C) 2014  Roberto Ladd
//    https://github.com/robertoladd/algorithms
//
//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.


class Algorithms{
    
    protected static $_disable_persistance=true;
    
    public static function multiplesSum($threshold, $ints = array()){
        
        $sum=0;
        $multiples = array();
        
        foreach($ints as $int_index => $int){
            $mult=0;
            for($i=1;$mult<$threshold;$i++){
                
                
                if(!isset($multiples[$mult])){//avoid duplicates
                    if($mult==0){
                        $mult = $int*$i;
                        continue;
                    }
                    
                    $sum += $mult;
                    $multiples[$mult] = $mult;
                    
                }
                
                $mult = $int*$i;
            }
        }
        return $sum;
    }
    
    
    
    public static function largeMultiplesSum($threshold, $ints = array(), $sum=0){
        static $_start_from_i;
        
        if(!is_array($_start_from_i)){
            foreach($ints as $k => $v) $_start_from_i[$k]=1;
        }
        
        
        $multiples = array();
        
        //Search fora common multiplier to use as recursion step to avoid a memory crash
        $common_multiple = 1;
        foreach($ints as $k => $int){
                $common_multiple = $common_multiple * $int;
        }
        $rec_limit = $common_multiple;
        while($rec_limit<100000){
            $rec_limit*=10;
        }
        
        foreach($ints as $int_index => $int){
            $mult=0;
            for($i=$_start_from_i[$int_index];$mult<$threshold;$i++){
                
                
                if(!isset($multiples[$mult])){//avoid duplicates
                    if($mult==0){
                        $mult = $int*$i;
                        continue;
                    }
                    self::log_progress("Adding multiple: {$mult} \t Current sum: {$sum}");
                    $sum += $mult;
                    $multiples[$mult] = $mult;
                    
                }
                
                $mult = $int*$i;
                
                //avoid reaching memory limit
                if($mult%$rec_limit==0){
                    
                    if($int_index==count($ints)-1){
                        
                        //clear memory
                        unset($multiples);
                        //save loop index for current number
                        $_start_from_i[$int_index]=$i;
                        
                        //start new range.
                        return self::largeMultiplesSum($threshold, $ints, $sum);
                    }else{
                        
                        //save loop index for current number
                        $_start_from_i[$int_index]=$i;
                        continue 2;
                    }
                }
            }
        }
        
        return $sum;
    }
    
    
    
    static function powerA($base, $exp){
        if(!is_int($base) || !is_int($exp) || $base<0 || $exp<0) throw new Exception('Both numbers must be natural numbers');
        
        //this is the simplest way. :)
        return pow($base, $exp);
    }
    
    static function powerB($base, $exp){
        if(!is_int($base) || !is_int($exp) || $base<0 || $exp<0) throw new Exception('Both numbers must be natural numbers');
        $pow = $base;
        for($i=1;$i<$exp;$i++){
            $pow = self::manualMultiplication($pow, $base);
        }
        return $pow;
    }
    
    static function manualMultiplication($x, $y){
        if(!is_numeric($x) || !is_numeric($y)) throw new Exception('Both parameters must be numbers');
        $sum = 0;
        for($i=1;$i<=$y;$i++){
            $sum += $x;
        }
        return $sum;
    }
    
    static function fibonacciRec($max, $f_nums=array(1), $curr=1){
        if(!is_int($max)) throw new Exception('Maximum limit must be an integer');
        
        if($curr>=$max) return $f_nums;
        
        //sum previous number with the current one
        $next= (max($f_nums) + $curr);
        
        //add current number to sequence
        $f_nums[]=$curr;
        
        $f_nums = self::fibonacciRec($max, $f_nums, $next);
        
        return $f_nums;
    }
    
    static function fibonacci($max){
        if(!is_int($max)) throw new Exception('Maximum limit must be an integer');
        $f_nums=array();
        $j = 1;
        for($i=1;$i<=$max;$i=$i+max($f_nums) ){
            $f_nums[]=$j;
            $j = $i;
        }
        
        $f_nums[]=$j;
        
        return $f_nums;
    }
    
    static function log_progress($log=''){
        echo $log."\r";
    }
    
}