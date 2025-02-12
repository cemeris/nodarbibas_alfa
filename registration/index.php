<?php

require_once('Database.php');
require_once('Registration.php');

$page = 'view';

if (isset($_GET['page']) && is_string($_GET['page'])) {
  if ($_GET['page'] === 'list') {
    $page = 'list';
  }
}

if ($page === 'list') {
  require_once('list.php');
  return;
}

require_once('view.php');



