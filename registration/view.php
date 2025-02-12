<form action="" method="post" class="calculator-wraper">
  <h4>Reģistrācija pasākumam</h4>
  <div class="calculator">
    <input type="text" name="firstname" placeholder="ierakstiet vārdu">
    <input type="text" name="lastname" placeholder="ierakstiet uzvārdu">

    <button type="submit">Saglabāt</button>
  </div>
  <div class="output">
<?php
  try {
    if (
      isset($_POST['firstname']) && isset($_POST['lastname'])
      && is_string($_POST['firstname']) && is_string($_POST['lastname'])
      && !empty($_POST['firstname']) && !empty($_POST['lastname'])
    ) {
      $registration_manager = new Registration();
      $registration_manager->register($_POST['firstname'], $_POST['lastname']);
      echo "Reģistrācija noritēja veiksmīgi";
    }
  }
  catch (Exception $e) {
    echo $e->getMessage();
  }
?>
  </div>
</form>