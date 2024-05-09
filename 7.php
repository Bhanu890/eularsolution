<?php
  function is_prime($num)
  {
    if($num % 2 == 0 || $num % 3 == 0)
      return false;
    for($i = 5; ($i * $i ) <= $num; $i += 6)
    {
        if($num % ($i+2) == 0 || $num % $i == 0)
          return false;
    }
    return true;
    
  }
  $ans = 0;
  $count = 2;
  for($i = 5; $count < 10001; $i+=6)
  {
    if(is_prime($i)){
      $count++;
    if($count == 10001)
      $ans = $i;
    }
    $temp = $i + 2;
    if(is_prime($temp)){
      $count++;
    if($count == 10001)
      $ans = $temp;
    }
  }
  echo "$ans";
?>