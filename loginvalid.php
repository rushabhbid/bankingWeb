<?php include 'connect.php'; ?>
<?php
session_start();
$cs=1;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
if(isset($_POST['pass'])){	
$pass=a($_POST["pass"]);

  if (empty($pass)) 
  {
    $_SESSION['passErr'] = " * Password is required";
  } 
 else
  {
    $cs=0;
  }
}

}

function a($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($cs==0){
$sql = "SELECT * FROM emp where username = '".$_SESSION['uid']."' && password = '".$pass."';";
$result = $conn->query($sql);
		$_SESSION['password'] = "";
		$_SESSION['passErr']="USERNAME/PASSWORD is WRONG!";
		
if ($result->num_rows > 0) {
        $_SESSION['password'] = $_POST['pass'];	
		$_SESSION['passErr'] = "";
		$_SESSION['custErr'] = "";
}

if($_SESSION['uid']==7860000 && $_SESSION['password']!="")
{
   session_destroy();
   header('Location: admins.php');
   exit();
}
elseif($_SESSION['uid']>7860000 && $_SESSION['uid']<=7860020 && $_SESSION['password']!="")
{
   session_destroy();
   header('Location: employees.php');
   exit();
}

else{
	header('Location: bank1.php');
   exit();
}
}

else{
	header('Location: bank1.php');
   exit();
}
?>