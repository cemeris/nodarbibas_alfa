<?php
/**
 * UZDEVUMA APRAKSTS
 * 
 * 1. ✅ Pievienienot navigāciju un navigācijā iekļaut saiti uz šo lapu. 
 * 2. Izveidot formu, kas aprēķina starpību starp diviem datumiem, pēc dotā dizaina figma vietnē.
 * 3. Izvadīt starpību starp datumiem cilvēkiem draudzīgā formātā.
 */

 /*
 NODERGI

 HTML
 <input type="date" name="start_time">

 PHP
 $time1 = strtotime(@$_GET['start_time']);
 $time2 = strtotime($end_time);

 $diff = $time1 - $time2;
 date('Y m d',  $diff); // convert from timestamp to formated string
 */

{
  include('private/debug.php');
  include("private/head.php");
  include("private/navigation.php");
  include("private/form_date.php");
}

printBrake();

function printBrake () {
  print("<br>");
}

function getDateDiff($start, $end) {
  if (
    !is_string($start) ||
    !is_string($end)
  ) {
    return '';
  }

  $start = strtotime($start);
  $end = strtotime($end);
  $diff = $end - $start;

  $sec_in_day = 60 * 60 * 24;
  $day_in_month = 30;

  $total_days = $diff / $sec_in_day;

  $day = $total_days % $day_in_month;
  $month = ($total_days - $day) / $day_in_month;

  $year = 0;

  $result = $day . "." . $month . "." . $year . ".";

  return $result;
}



