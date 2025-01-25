<form action="" method="get" class="calculator-wraper">
  <h4>Kalkulators</h4>
  <div class="calculator">
    <input type="number" name="n" placeholder="Skaitlis viens">
    <input type="number" name="m" placeholder="Skaitlis divi">
    <input type="text" name="o" placeholder="Aritmētiskais operātors">

    <button type="submit">Aprēķināt</button>
  </div>
  <div class="output">
    <?php
      $result = calculateBaseOperations(@$_GET['n'], @$_GET['m'], @$_GET['o']);
      print($result);
    ?>
  </div>
</form>