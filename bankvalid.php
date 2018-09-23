<?php
$cust="";
$custErr="";
$c=1;

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{  
	$cust = a($_POST["cust"]);
 if (empty($cust)) 
  {
    $_SESSION['custErr'] = " * Customer Id is required";
  } 
  elseif(strlen($cust)!=7)
  {
    $_SESSION['custErr'] = " * Customer Id should be 7 digits long";	   
  }
  else 
  {
    $c=0;
	$_SESSION['uid']=$cust;
	
  }
}

function a($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($c==0)
{
   header('Location: bank1.php');
   exit();
}

else {
	header('Location: bank.php');
	exit();
}



?>