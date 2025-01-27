<form action="" method="get" class="calculator-wraper">
  <h4>Starpība starp diviem datumiem</h4>
  <div class="calculator">
    <input type="date" name="start" placeholder="Sākuma datums">
    <input type="date" name="end" placeholder="Beigu datums">

    <button type="submit">Aprēķināt</button>
  </div>
  <div class="output">
    <?php
      include __DIR__ . "/date_diff_helper.php";
      // $result = secToDatePassed(
      //   datesToDiff(@$_GET['start'], @$_GET['end'])
      // );
      $result = getDateDiffWithDatetime(@$_GET['start'], @$_GET['end']);
      // $result = getDateDiff(@$_GET['start'], @$_GET['end']);
      // print_r($result);

      print(
        "Dienas:{$result['days']} Mēneši: {$result['month']} Gadi: {$result['years']}."
      );

    ?>
  </div>
</form>