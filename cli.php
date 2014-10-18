<?php
ini_set('display_errors', true);
include('algorithms.php');

switch($argv[1]){

	case 'multiples_of_3_or_5_below_100':
		echo "\n\nResult: ".Algorithms::multiplesSum(100, array(3,5))."\n";
	break;
	case 'large_two_multiples_sum':
		echo "\n\nResult: ".Algorithms::largeMultiplesSum($argv[2], array($argv[3],$argv[4]))."\n";
	break;
	case 'list_multiples_sum':
		echo "\n\nResult: ".Algorithms::largeMultiplesSum($argv[2], explode(',',$argv[3]))."\n";
	break;
	case 'power_a':
		echo "\n\nResult: ".Algorithms::powerA((int) $argv[2],(int) $argv[3])."\n";
	break;
	case 'power_b':
		echo "\n\nResult: ".Algorithms::powerB((int)$argv[2],(int) $argv[3])."\n";
	break;
	case 'fibonacci_rec10':
		echo "\n\nResult: ".implode(',', Algorithms::fibonacciRec(10))."\n";
	break;
	case 'fibonacci_rec':
		echo "\n\nResult: ".implode(',', Algorithms::fibonacciRec((int) $argv[2]))."\n";
	break;
	case 'fibonacci':
		echo "\n\nResult: ".implode(',', Algorithms::fibonacci((int) $argv[2]))."\n";
	break;
}