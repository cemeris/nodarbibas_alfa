<?php
class Storage
{
  private $content = [
    'data' => []
  ];

  private $file_name;

  public function __construct($storage_name) {
    $this->file_name = __DIR__ . "/../data/{$storage_name}.json";
    if (!file_exists($this->file_name)) {
      return;
    }
    $file_content = file_get_contents($this->file_name);
    $content = json_decode($file_content, true);

    //TODO: pārbaudīt vai $content struktūra ir atbilstoša

    $this->content = $content;
  }

  public function getData() {
    return $this->content['data'];
  }

  public function appendEntry($entry) {
    $entry['time'] = time();
    $this->content['data'][] = $entry;
  
    file_put_contents(
      $this->file_name,
      json_encode($this->content, JSON_PRETTY_PRINT)
    );
  }
}