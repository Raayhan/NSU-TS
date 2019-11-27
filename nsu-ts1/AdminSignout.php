<?php
session_start();
require_once 'connect.php';
unset($_SESSION['admin']);
session_destroy();

header("Location: index.php");
exit;
?>