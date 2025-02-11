<?php

class Logger extends Database
{
  private $table_name = 'history';

  // public function __construct() {
  //   parent::__construct();
  // }

  public function log($message) {
    $this->insert(
      $this->table_name,
      [
        'message' => $message,
        'time' => date('Y-m-d H:i:s')
      ]
    );
  }

  public function getHistory() {
    return $this->select($this->table_name);
  }
}
