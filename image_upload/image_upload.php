<?php
$target_dir = "uploads/";
$file_name = basename($_FILES["image_field"]["name"]);
$target_file = $target_dir . $file_name;
$upload_ok = 1;
$image_file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["image_upload"])) {
  $check = getimagesize($_FILES["image_field"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $upload_ok = 1;
  } else {
    echo "File is not an image.";
    $upload_ok = 0;
  }
}

if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $upload_ok = 0;
}

if ($_FILES["image_field"]["size"] > 500000000) {
  echo "Sorry, your file is too large.";
  $upload_ok = 0;
}

if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg"
&& $image_file_type != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $upload_ok = 0;
}

if ($upload_ok == 0) {
  echo "Sorry, your file was not uploaded.";
}
else {
  $check = move_uploaded_file($_FILES["image_field"]["tmp_name"], $target_file);
  if ($check) {
    echo "The file ". htmlspecialchars( basename( $_FILES["image_field"]["name"])). " has been uploaded.";

    require_once('Database.php');
    require_once('Profile.php');

    $profile = new Profile();
    $profile->createProfile($file_name);
  }
  else {
    echo "Sorry, there was an error uploading your file.";
  }
}