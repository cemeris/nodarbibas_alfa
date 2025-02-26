<!DOCTYPE html>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>HTML + CSS</title>
<link rel="stylesheet" href="style.css">

<form action="" method="get" class="calculator-wraper">
  <h4>Kalkulators</h4>
  <div class="calculator">
    <input type="hidden" name="sid">
    <input type="number" name="n" placeholder="Skaitlis viens">
    <input type="number" name="m" placeholder="Skaitlis divi">
    <input type="text" name="o" placeholder="Aritmētiskais operātors">

    <button type="submit">Aprēķināt</button>
  </div>
  <div class="output">
  </div>
</form>

<script src="Handler.js"></script>
<script src="script.js"></script>