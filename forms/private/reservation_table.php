<table>
  <tr>
    <th>ID</th>
    <th>Laiks</th>
    <th>Vārds</th>
    <th>Uzvārds</th>
  </tr>
  <?php

  $reservation_manager = new Storage('reservations');
  $reservations = $reservation_manager->getData();

  // Cikls kurš izpildīs kādu darbību atkārtoti
  for ($id = 0; $id < count($reservations); $id++) {
echo <<<ROW
  <tr>
    <td>{$id}</td>
    <td>{$reservations[$id]['time']}</td>
    <td>{$reservations[$id]['firstname']}</td>
    <td>{$reservations[$id]['lastname']}</td>
  </tr>
ROW;
  }
  
  ?>
</table>