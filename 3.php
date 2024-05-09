<?php
	$ans = 1;
	$n = 600851475143
	while($n % 2 == 0)
	{
		$ans = 2;
		$n /= 2;
	}
	
	for($i = 3; $i*$i  <= $n; $i += 2)
	{
		if($n % $i == 0){
			$ans = $i;
			$n /= $i;
		}
	}
	if($n > 1)
	  $ans = $n;
	echo "$ans";
?>