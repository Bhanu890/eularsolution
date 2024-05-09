<?php
  $sum = 0;
  $sq_sum = 0;
  
  for($i = 1; $i <= 100; $i++)
  {
    $sum += $i ;
    $sq_sum += ($i * $i);
  }
  $ans = ($sum*$sum)-$sq_sum;
  echo "$ans";
?>