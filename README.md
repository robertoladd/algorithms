#PHP Math algorithms

A set of mathematical algorithms in PHP. 

##Algorithms: 
* <b>multiples_of_3_or_5_below_100</b>                           returns the sum of all multiples of three or four below 100
* <b>large_two_multiples_sum <threshold> <numx> <numy></b>       returns the sum of all multiples of numx or numy below threshold
* <b>list_multiples_sum  <threshold> <numx>[,<numy>...]</b>     returns the sum of all unique multiples of all the coma separated numbers below threshold
* <b>power_a  <base> <exp></b>                                   returns the power of base at index exp using PHP's built in function.
* <b>power_b  <base> <exp></b>                                   returns the power of base at index exp using a custom sum function.
* <b>fibonacci_rec10</b>                                         returns all the numbers of the fibonacci sequence below 10. With recursion.
* <b>fibonacci_rec <threshold></b>                               returns all the numbers of the fibonacci sequence below threshold. With recursion.
* <b>fibonacci <threshold></b>                                   returns all the numbers of the fibonacci sequence below threshold. Without recursion.

##Usage

```Shell

$php /[projectpath]/cli.php multiples_of_3_or_5_below_100

$php /[projectpath]/cli.php list_multiples_sum 1000 3,5,7

```
Change php binary path and projectpath path to fit your local instalation settings.
