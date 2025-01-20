<?php

{
  include('debug.php');
  include("head.php");
  include("navigation.php");
  include("form.php");
}

/* Kalkulātora aprēķini */

printBrake();

$result = calculateBaseOperations(@$_GET['n'], @$_GET['m'], @$_GET['o']);
print($result);

printBrake();
printBrake();

function divide ($n, $m) {
  if ($m == 0) return "Error - can not devide by zero!";
  return $n / $m;
}

function printBrake () {
  print("<br>");
}

function calculateBaseOperations($n, $m, $o) {
  if (
    !is_string($n) ||
    !is_string($m) ||
    !is_string($o)
  ) {
    return '';
  }

  $number_first = (int) $n;
  $number_second = (int) $m;
  $operator = $o;

  if ($operator == "+") {
    return $number_first + $number_second;
  }
  if ($operator == "-") {
    return $number_first - $number_second;
  }
  if ($operator == "*") {
    return $number_first * $number_second;
  }
  if ($operator == "/") {
    return divide($number_first, $number_second);
  }

  return "Error";
}



