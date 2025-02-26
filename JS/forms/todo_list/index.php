<!DOCTYPE html>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>HTML + CSS</title>
<link rel="stylesheet" href="style.css">

<form action="" method="get" class="calculator-wraper">
  <h4>Uzdevumu saraksts</h4>
  <div class="calculator">
    <input type="text" name="task_title" placeholder="Pierakstiet uzdevumu">
    <textarea name="task_description"></textarea>
    <button type="submit">Saglabāt</button>
  </div>
  <div class="output">
  </div>
</form>

<script src="StorageManager.js"></script>
<script src="Handler.js"></script>
<script src="script.js"></script>