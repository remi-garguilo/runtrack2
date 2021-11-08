<?php

function calcule($a,$operation,$b) {
  $res=0;
  if ($operation == '+')
    $res= $a + $b;
  else if ($operation == '-')
    $res = $a - $b;
  else if ($operation == '*')
    $res = $a * $b;
  else if ($operation == '/')
      $res = $a / $b;
  else
    $res= $a % $b;
  return $res;
}

$res=calcule(1, '+', 2);
echo $res;
?>