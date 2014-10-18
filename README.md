#PHP Math algorithms

A set of mathematical algorithms in PHP. 

##Algorithms: 
* <b>multiples_of_3_or_5_below_100</b>                           returns the sum of all multiples of three or four below 100
* <b>large_two_multiples_sum &lt;threshold&gt; &lt;numx&gt; &lt;numy&gt;</b>       returns the sum of all multiples of numx or numy below threshold
* <b>list_multiples_sum  &lt;threshold&gt; &lt;numx&gt;[,&lt;numy&gt;...]</b>     returns the sum of all unique multiples of all the coma separated numbers below threshold
* <b>power_a  &lt;base&gt; &lt;exp&gt;</b>                                   returns the power of base at index exp using PHP's built in function.
* <b>power_b  &lt;base&gt; &lt;exp&gt;</b>                                   returns the power of base at index exp using a custom sum function.
* <b>fibonacci_rec10</b>                                         returns all the numbers of the fibonacci sequence below 10. With recursion.
* <b>fibonacci_rec &lt;threshold&gt;</b>                               returns all the numbers of the fibonacci sequence below threshold. With recursion.
* <b>fibonacci &lt;threshold&gt;</b>                                   returns all the numbers of the fibonacci sequence below threshold. Without recursion.

##Usage

```Shell

$php /[projectpath]/cli.php multiples_of_3_or_5_below_100

$php /[projectpath]/cli.php list_multiples_sum 1000 3,5,7

```
Change php binary path and projectpath path to fit your local instalation settings.
