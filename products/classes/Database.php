<?php

class Database {
  private $conn;

  public function __construct($host, $user, $password, $dbname) {
    $this->conn = new mysqli($host, $user, $password, $dbname);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }

  public function insert($table, $data) {
    $columns = implode(", ", array_keys($data));
    $values = implode("', '", array_values($data));
    $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
    return $this->conn->query($sql);
  }

  public function update($table, $data, $where) {
    $set = [];
    foreach ($data as $column => $value) {
      $set[] = "$column = '$value'";
    }
    $setQuery = implode(", ", $set);
    $sql = "UPDATE $table SET $setQuery WHERE $where";
    return $this->conn->query($sql);
  }

  public function delete($table, $where) {
    $sql = "DELETE FROM $table WHERE $where";
    return $this->conn->query($sql);
  }

  public function select($table, $columns = "*", $where = "1") {
    $sql = "SELECT $columns FROM $table WHERE $where";
    $result = $this->conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function __destruct() {
    $this->conn->close();
  }
}
