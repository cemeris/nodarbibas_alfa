<?php
class Logger
{
  private $file_name;

  public function __construct ($file_name) {
    $this->file_name = $file_name;
  }

  public function log($message) {
    file_put_contents(
      $this->file_name,
      $message . PHP_EOL,
      FILE_APPEND);
  }
}