<form action="" method="get" class="calculator-wraper">
  <h4>Starpība starp diviem datumiem</h4>
  <div class="calculator">
    <input type="date" name="start" placeholder="Sākuma datums">
    <input type="date" name="end" placeholder="Beigu datums">

    <button type="submit">Aprēķināt</button>
  </div>
  <div class="output">
    <?php
      $result = getDateDiff(@$_GET['start'], @$_GET['end']);
      print($result);
    ?>
  </div>
</form>