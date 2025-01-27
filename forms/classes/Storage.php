<?php
class Storage
{
  private $content = [
    'data' => []
  ];

  public function __construct($storage_name) {
    $file_name = __DIR__ . "/../data/{$storage_name}.json";
    if (file_exists($file_name)) {
      $file_content = file_get_contents($file_name);
      $content = json_decode($file_content, true);

      //TODO: pārbaudīt vai $content struktūra ir atbilstoša

      $this->content = $content;
    }
  }

  public function getData() {
    return $this->content['data'];
  }
}