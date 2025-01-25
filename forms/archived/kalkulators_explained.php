<?php

{
  include("head.php");
  include("navigation.php");
}

/* Kalkulātora aprēķini */
{
  $number_first = 3;
  $number_second = 4;
  $operator = "+";

  if ($operator == "+") {
    $result = $number_first + $number_second;
  }
  elseif ($operator == "-") {
    $result = $number_first - $number_second;
  }
  else {
    $result = "Error";
  }
  
  print($result);
}

