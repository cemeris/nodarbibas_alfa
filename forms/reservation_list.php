<?php

{
  include __DIR__ . "/classes/Storage.php";
  include('private/debug.php');
  include("private/head.php");
  include("private/navigation.php");
  include("private/reservation_table.php");
}

function saveReservation($firstname, $lastname) {
  if (empty($firstname) || empty($lastname)) {
    return;
  }

  $reservation_manager = new Storage('reservations');

  $reservation_manager->appendEntry([
    'firstname' => $firstname,
    'lastname' => $lastname
  ]);
}





