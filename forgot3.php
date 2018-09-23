<!DOCTYPE html>
<head>
<title>FORGOT</title>
<style>
#s0{
float:left;
border:5px outset grey;
background-color:black;
color: red;
font-size:2em;	
height:200px;
width:770px;
}

input,select{
font-size:0.4em;
font-weight:bold;
padding: 12px 20px;   
margin: 8px 0;
box-sizing: border-box;
border-radius:15px;
}

option{
font-size:1.2em;
font-weight:bold;
padding: 12px 20px;   
box-sizing: border-box;
border-radius:15px;
}
#b2 {
margin-top:1.5%;
margin-right:45%;
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
background-color: #417cb8;
}

#b2:active,
#b2.active {
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

if($c==0 )
{
 header('Location:forgot.php');
 exit();
}

?>

<div><center>
LEGO BANK<br>
MAN ME HAI VISHWAAS...</center>
</div>
<section id="s0">
<form action="forgot3.php" method="POST">
<table cellpadding = 10>
<tr>
<td><label>Customer ID:</label></td>
<td>
<input type=text name=cust autofocus>
<?php
echo $custErr;
?>
</td></tr>
</table>
<button id= "b2" type="submit" name="submit">Continue</button>

</section>

</body>
</html>