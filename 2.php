<?php
	$first = 1;
	$curr = 2;
	$sum = 2;
	while($curr < 4000000)
	{
		$next = $first+$curr;
		$first = $curr;
		$curr = $next;
		
		if($curr % 2 == 0 && $curr < 4000000)
		  {
		    $sum = $sum + $curr;
		  }
	}
		echo "$sum";
	
?>