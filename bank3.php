<?php include 'connect.php'; ?>
<!DOCTYPE html>
<head>

<title>BANK</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<style>
#s1 {
float: right;
margin-right: 10%;
margin-top: 5%;
border: 5px outset gray;
padding: 1em;
background-color: black;
color: red;
font-size:2em;	
border-radius:15px;
}

input{
font-size:0.4em;
font-weight:bold;
padding: 12px 20px;   
margin: 8px 0;
box-sizing: border-box;
border-radius:15px;
}

#b1 {
float:right;
color: #fff;
background-color: #6496c8;
border: none;
border-radius: 15px;
box-shadow: 0 10px #27496d;
font-size:1em;
}

#b1:hover,
#b1.hover {
cursor:pointer;
background-color: #417cb8;

}

#b1:active,
#b1.active {
background-color: #417cb8;
box-shadow: 0 5px #27496d;
transform: translateY(5px);
}

div{
background-color:black;
font-size:4.5em;
font-weight:bold;
color: blue;
font-family:Impact;
}
</style>

</head>

<!--create new account , withdraw,deposit,loan,etc.-->
<body bgcolor="cyan">

<?php
$custErr="";
$c=1;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{  
 $cust = a($_POST["cust"]);
 if (empty($cust)) 
  {
    $custErr = " * Customer Id is required";
  } 
  elseif(strlen($cust)!=7)
  {
    $custErr = " * Customer Id should be 7 digits long";	   
  }
  else 
  {
    $c=0;
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

?>

<div><center>
LEGO BANK<br>
MAN ME HAI VISHWAAS...</center>
</div>
"Make it as simple as possible, but not simpler."-Albert Einstein
<section id="s1">

<form method="POST" action="bank3.php">  

<table cellpadding = 10>
<tr>
<td><label>Customer ID:</label></td>
<td>
<input type=text name=cust autofocus>
<?php
echo $custErr;
session_start();

?>
</td>
</table>
<button id= "b1" type="submit" name="submit">Continue</button>

</section>
</body>
</html>