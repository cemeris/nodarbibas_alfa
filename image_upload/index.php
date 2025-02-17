
<h2>Image upload form</h2>
<form enctype="multipart/form-data" action="image_upload.php" method="post">
  <label>Bilde</label>
  <input type="file" name="image_field">
  <button type="submit" name="image_upload">Augšupielādēt</button>
</form>

<br>


<h2>API form</h2>
<form enctype="multipart/form-data" action="api.php" method="post">
  <label>Bilde</label>
  <input type="file" name="image_field">
  <button type="submit" name="image_upload">Augšupielādēt</button>
</form>


<?php

require_once('Database.php');
require_once('Profile.php');

$profile = new Profile();
$all_profiles = $profile->getProfiles();
$count_profile = count($all_profiles);

for ($n = 0; $n < $count_profile; $n++) {
  $profile = $all_profiles[$n];

  echo "<img width='300' src='uploads/{$profile['img']}' >";
}
?>