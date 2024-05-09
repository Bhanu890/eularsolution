<?php
  function ispalindrome($num)
  {
    $str = (string)$num;
    return $str === strrev($str);
  }
  
	$ans = 1;
	for($i = 999; $i >= 100; $i--)
	{
	  for($j = 999; $j >= 100; $j--)
	  {
	    $prod = $i * $j ;
	    if(ispalindrome($prod) ){
	      if($ans < $prod)
	      $ans = $prod;
	    }
	  }
	}
	echo "$ans";  
	
?>