<?php
session_start();
require_once 'connect.php';
unset($_SESSION['teacher']);
session_destroy();

header("Location: index.php");
exit;
?>
