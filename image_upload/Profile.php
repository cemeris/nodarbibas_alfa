<?php

class Profile extends Database
{
  private $table_name = 'profiles';

  public function createProfile($img) {
    $this->insert(
      $this->table_name,
      [
        'img' => $img,
        'time' => date('Y-m-d H:i:s')
      ]
    );

    if ($this->get_last_error()) {
      throw new Exception($this->get_last_error());
    }
  }

  public function getProfiles() {
    return $this->select($this->table_name);
  }
}
