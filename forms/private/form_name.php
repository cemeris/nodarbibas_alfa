<form action="" method="get" class="calculator-wraper">
  <h4>Reģistrācija pasākumam</h4>
  <div class="calculator">
    <input type="text" name="firstname" placeholder="ierakstiet vārdu">
    <input type="text" name="lastname" placeholder="ierakstiet uzvārdu">

    <button type="submit">Saglabāt</button>
  </div>
  <div class="output">
    <?php
    saveReservation(@$_GET['firstname'], @$_GET['lastname']);
    ?>
  </div>
</form>