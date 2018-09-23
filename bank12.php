<?php include 'connect.php'; ?>
<!DOCTYPE html>
<head>
<title>BANK1</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<style>
input{
font-size:0.4em;
font-weight:bold;
padding: 12px 20px;   
margin: 8px 0;
box-sizing: border-box;
border-radius:15px;
}

#b2 {
float:right;
color: #fff;
background-color: #6496c8;
border: none;
border-radius: 15px;
box-shadow: 0 10px #27496d;
font-size:1em;
}

#b2:hover,
#b2.hover {
cursor:pointer;
background-color: #417cb8;
}

#b2:active,
#b2.active {
background-color: #417cb8;
box-shadow: 0 5px #27496d;
}


div{
background-color:black;
font-size:4.5em;
font-weight:bold;
color: blue;
font-family:Impact;
}


a:link, a:visited {
float:center;
color: cyan;
padding: 14px 25px;
text-decoration: none;  
display: inline-block;
width:300px;
}


a:hover, a:active {
 background-color: cyan;
 color:white;
}


</style>
</head>



<div><center>
LEGO BANK<br>
MAN ME HAI VISHWAAS...</center>
</div>

<?php
session_start();
echo $_SESSION['uid'];


$passErr="";
$cs=1;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{  
$pass=a($_POST["pass"]);

  if (empty($pass)) 
  {
    $passErr = " * Password is required";
  } 
 else
  {
    $cs=0;
  }
}

function a($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($cs=0){
$sql = "SELECT * FROM customer where username = '".$_SESSION['uid']."' && password = '".$_POST['pass']."';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
        $_SESSION['password'] = $_POST['pass'];	
}

if($cs==0 && $_SESSION['uid']==7860000)
{

   header('Location: admin.php');
   exit();
}
elseif($cs==0 && $_SESSION['uid']>7860000 && $_SESSION['uid']<=7860020)
{
   header('Location: employee.php');
   exit();
}
elseif($cs==0 && $_SESSION['uid']>7860020)
{
	
   header('Location: customer.php');
   exit();
}
}

 ?>

<section id="s2">
<form action="bank1.php"  method="POST">

<table>
<tr><td>
<label>Customer ID:</label>
</td>
<td>
<?php
echo "<input type=text name=cust value='".$_SESSION['uid']."' disabled>";
?>
</td></tr>
<tr><td>
<label>Password:</label>
</td>
<td>
<input type="password" name="pass" autofocus>
<?php
if($cs!=0)
echo $passErr;
?>
</td></tr>
</table>
<br>
<input type="submit" id="b2" name="submit" value="&#128274; Login"></input>
</section>
</form>

<section id="s3">
FORGOT PASSWORD ?<br>
<a href="forgot3.php"><h7 style="font-size:0.898em;color:white;">RETRIEVE PASSWORD</h7></a>
</section>

</body>
</html>