<?php
  function gcd($a , $b)
  {
    while($b != 0)
    {
      $temp = $b;
      $b = $a % $b;
      $a = $temp;
    }
    return $a;
  }
  function lcm($a, $b)
  {
    return ($a * $b)/gcd($a, $b);
  }
  
	$ans = 1;
	for($i = 1; $i <= 20; $i++)
	{
	  $ans = lcm($ans,$i);
	}
	echo "$ans";  
	
?>