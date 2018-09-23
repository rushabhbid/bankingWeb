<?php

include 'connect.php';

session_start();
$c=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{  
$cust= a($_POST["cust"]);
 if (empty($cust)) 
  {
    $_SESSION['cErr'] = " * Customer Id is required";
  } 
  elseif(strlen($cust)!=7)
  {
    $_SESSION['cErr'] = " * Customer Id should be 7 digits long";	   
  }
  
  $sql = "SELECT * FROM customer where user = '".$cust."';";
	$result = $conn->query($sql);
		
if ($result->num_rows > 0) {
		$_SESSION['cErr'] = "";
		$c=1;
		$_SESSION['cust']=$cust;
		header('Location: customer.php');
		exit();
}
else
 $_SESSION['cErr']="Customer doesnt exist!";
}

if($c==0)
{
   header('Location: employee.php');
   exit();
}

function a($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>