<?php include 'customer.php';?>
<!DOCTYPE html>
<head>
<title>EMPLOYEE</title>
<style>
#s10{
display:none;
}
#s0{
float: left;
margin-top:0.52%;
margin-left:-355px;
background-color: black;
color: red;
font-size:2em;	
height:1000px;
}

#s5 {
float: right;
margin-right: 10%;
margin-top: 2%;
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

#b3 {
float:right;
color: #fff;
background-color: #6496c8;
border: none;
border-radius: 15px;
box-shadow: 0 10px #27496d;
font-size:1em;
}

#b3:hover,
#b3.hover {
background-color: #417cb8;
}

#b3:active,
#b3.active {
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
<body>
<?php
$custErr="";
$c=1;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{  
$cust= a($_POST["cust"]);
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

if($c==0)
{
   header('Location: customer.php');
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

<section id="s0">
<a id="a9" href="employee.php">Home</a><br>
<a id="a7" href="emp_newcust.php">New Customer</a><br>
<a id="a8" href="emp_remcust.php">Remove Customer</a><br>
</section>
<section id="s5">

<form method="POST" action="employee2.php">  

<table cellpadding = 10>
<tr>
<td><label>Customer ID:</label></td>
<td>
<input type=text name=cust autofocus>
<?php
echo $custErr;
?>
</table>
<button id="b3" type="submit" name="admin">Continue</button>
</section>
</td>
</table>
</section>
</body>
</html>
