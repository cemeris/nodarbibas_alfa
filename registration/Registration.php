<?php

class Registration extends Database
{
  private $table_name = 'event_participation_registration';

  public function register($firstname, $lastname) {
    $this->insert(
      $this->table_name,
      [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'time' => date('Y-m-d H:i:s')
      ]
    );

    if ($this->get_last_error()) {
      throw new Exception($this->get_last_error());
    }
  }

  public function getRegistrations() {
    return $this->select($this->table_name);
  }
}
