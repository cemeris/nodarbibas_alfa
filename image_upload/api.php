<?php

/*
Uzdevums:
Izveidot faila aukšupielādes funkcionalitāti, kur validācija notiek iekš try{} catch{} blokiem
*/


if (isset($_POST['image_upload'])) {
  try {
    if (isset($_FILES['image_field']) === false) {
      throw new Exception('file has not been submited');
    }

    $check = getimagesize($_FILES["image_field"]["tmp_name"]);
    if($check !== false) {
      throw new Exception("File is an image - " . $check["mime"] . ".");
    }

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image_field"]["name"]);
    $image_file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
      throw new Exception("Sorry, file already exists.");
    }

    //Nākošās pārbaudes

    //Faila augšupielāde
  }
  catch (Exception $e) {
    echo $e->getMessage();
  }
}



// header('Location: ./');



/**
 try {
  ..
  ..
  if (false) {
    throw new Exception('Notikusi kļūda');
  }
  ..

 }
 catch (Exception $e) {
  echo $e->getMessage();
 }
 */

