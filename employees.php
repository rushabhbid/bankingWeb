<?php
session_destroy();
session_start();

$_SESSION['cust']="";
$_SESSION['cErr']="";

header('Location: employee.php');
exit();

?>