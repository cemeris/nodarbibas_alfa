<?php

{
  include __DIR__ . "/classes/Storage.php";
  include('private/debug.php');
  include("private/head.php");
  include("private/navigation.php");
  include("private/form_name.php");
}

printBrake();

function printBrake () {
  print("<br>");
}

function saveReservation($firstname, $lastname) {
  $file_name = __DIR__ . "/data/reservations.json";

  $reservation_manager = new Storage('reservations');

  $data = $reservation_manager->getData();
  $content = [
    'data' => $data
  ];

  $entry = [
    'time' => time(),
    'firstname' => $firstname,
    'lastname' => $lastname,
  ];

  $data[] = $entry;

  $content['data'] = $data;

  file_put_contents($file_name, json_encode($content, JSON_PRETTY_PRINT));
}





