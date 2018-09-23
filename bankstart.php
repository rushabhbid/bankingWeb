<?php
session_destroy();
session_start();

$_SESSION['custErr']="";
$_SESSION['passErr']="";



header('Location: bank.php');
exit();

?>
