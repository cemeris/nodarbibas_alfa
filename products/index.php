<?php

$db = new Database('localhost', 'root', '', 'testdb');
$db->insert('users', ['name' => 'John Doe', 'email' => 'john@example.com']);
$data = $db->select('users');
print_r($data);
