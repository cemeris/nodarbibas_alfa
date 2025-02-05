<?php

// Otrā klase: Lietotāja ievades apstrāde
class InputHandler
{
  // Validē ievadītos datus
  public function validateInput($input)
  {
    if (!is_numeric($input)) {
      throw new Exception("Ievadītajai vērtībai jābūt skaitlim!");
    }
    return (float)$input;
  }

  // Sanitizē ievadi
  public function sanitizeInput($input)
  {
    return htmlspecialchars(strip_tags($input));
  }
}
