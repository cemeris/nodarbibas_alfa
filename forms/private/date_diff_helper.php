<?php

function datesToDiff ($start, $end) {
  if (
    !is_string($start) ||
    !is_string($end)
  ) {
    return '';
  }

  $start = strtotime($start);
  $end = strtotime($end);
  return $end - $start;
}

function secToDatePassed($seconds) {
  $seconds = (int) $seconds;
  $years = floor($seconds / (365*24*60*60)); // 2.432423 => 2
  $seconds = $seconds - $years * (365*24*60*60);

  $month = floor($seconds / (30*24*60*60));
  $seconds -= $month * (30*24*60*60);

  $days = floor($seconds / (24*60*60));
  $seconds -= $days * (24*60*60);

  return [
    'years' => $years,
    'month' => $month,
    'days' => $days
  ];
}

function getDateDiffWithDatetime($start, $end) {
  if (
    !is_string($start) ||
    !is_string($end)
  ) {
    return [
      'years' => '',
      'month' => '',
      'days' => ''
    ];
  }

  $date1 = new DateTime($start);
  $date2 = new DateTime($end);
  $diff = $date1->diff($date2);
  return [
    'years' => $diff->y,
    'month' => $diff->m,
    'days' => $diff->d
  ];
}