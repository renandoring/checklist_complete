<?php

include_once 'Dao.class.php';
include_once 'Connection.class.php';

$conn = new Connection();
$conn->Connect();

$dao = new Dao();
$dao->Update("{$_GET['checklist']}", $_GET['id'], $_GET['ok']);
?>
