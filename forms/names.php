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
  if (empty($firstname)) {
    throw new Exception('vārds netika norādīts');
  }
  if (empty($lastname)) {
    throw new Exception('uzvārds netika norādīts');
  }

  $reservation_manager = new Storage('reservations');

  $reservation_manager->appendEntry([
    'firstname' => $firstname,
    'lastname' => $lastname
  ]);
}

/*
  try {
    $a = 1;
    $b = 2;
    if (true) {
      throw new Exception('error');
    }

    $sum = $a + $b;
  }
  catch (Exception $e) {

  }
  */





