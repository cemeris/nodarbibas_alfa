<?php

class Database {
  /**
   * $conn - connection jeb savienojuma objekts
   */
  private $conn;

  public function __construct() {
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $dbname = 'calculation_log_05_02';
    $this->conn = new mysqli($host, $user, $password, $dbname);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }

  /**
   * $data 
   * example1: ["title" => "Volvo", "color" => "green"],
   * example2: ["title" => "BMW", "color" => "black"],
   */
  protected function insert($table, $data) {
    $columns = implode(", ", array_keys($data)); // title, color
    $values = implode("', '", array_values($data)); // Volvo', 'green
    $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
    return $this->conn->query($sql);
  }

  protected function get_last_error() {
    return $this->conn->error;
  }

  protected function update($table, $data, $where) {
    $set = [];
    foreach ($data as $column => $value) {
      $set[] = "$column = '$value'";
    }
    $setQuery = implode(", ", $set);
    $sql = "UPDATE $table SET $setQuery WHERE $where";
    return $this->conn->query($sql);
  }

  protected function delete($table, $where) {
    $sql = "DELETE FROM $table WHERE $where";
    return $this->conn->query($sql);
  }

  protected function select($table, $columns = "*", $where = "1") {
    $sql = "SELECT $columns FROM $table WHERE $where";
    $result = $this->conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function __destruct() {
    $this->conn->close();
  }
}
