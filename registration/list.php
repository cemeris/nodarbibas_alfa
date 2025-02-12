<?php


echo "Gadijums kad izvadīt reģistrēto sarakstu.";

/*
Izvadīt datus
  - Iegūt datus no event_participation_registration tabuls masīva veidā
  - Bāzes HTML, piemēram, tabulai
  - cikls, kas iziet cauri katram ierakstam

  - izvadam vārdu -> echo $firstname
  - izvadam uzvārdu -> echo $lastname
*/

$registration = new Registration();
$participants = $registration->getRegistrations();

?>

<table>
  <tr>
    <th>Image</th>
    <th>Fisrtname</th>
    <th>Lastname</th>
  </tr>
<?php
for ($i = 0; $i < count($participants); $i++) {
  $entry = $participants[$i];
  echo <<<HTML
  <tr>
    <td>
      <img
        src="assets/img/image.png"
        width="100"
        alt="User avatar image"
      >
    </td>
    <td>{$participants[$i]['firstname']}</td>
    <td>{$entry['lastname']}</td>
  </tr>
HTML;
}
?> 
</table>
