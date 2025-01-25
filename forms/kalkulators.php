<?php

{
  include('private/debug.php');
  include("private/head.php");
  include("private/navigation.php");
  include("private/form.php");
}

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



