<!DOCTYPE html>
<head>
<title>ADMIN_REM_USER</title>
<style>
#s1{
float: left;
margin-top:-1%;
margin-left:-1%;
border: 5px outset gray;
background-color: black;
color: red;
font-size:2em;	
height:1000px;
}

#s2 {
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
a:link, a:visited {
float:left;
color: cyan;
padding: 14px 25px;
text-align: center;
text-decoration: none;  
display: inline-block;
width:300px;
}


a:hover, a:active {
 background-color: cyan;
 color:white;
}

#a6:link, #a6:visited {
float:left;
background-color:cyan;
color: white;
padding: 14px 25px;
text-align: center;
text-decoration: none;  
display: inline-block;
width:300px;
}

 #a8:active {
 background-color:black;
 color:cyan;
}
input,select{
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

#b0 {
float:right;
color: #fff;
background-color: #6496c8;
border: none;
border-radius: 15px;
box-shadow: 0 10px #27496d;
font-size:1em;
}

#b0:hover,
#b0.hover {
background-color: #417cb8;
}

#b0:active,
#b0.active {
 background-color: #417cb8;
 box-shadow: 0 5px #27496d;
 transform: translateY(5px);
}


div{
margin-top:-1%;
font-size:4.5em;
font-weight:bold;
color: blue;
font-family:Impact;
background:black;
height:3.35em;
}
img{
height:250px;
width:350px;
}
</style>
</head>
<body bgcolor=cyan>
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
  elseif($cust==7860000 || $cust>7860020)
  {
    $custErr = " * Enter a valid User Id";	   
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


?>
<section id="s1">
<img src="logo.jpg"  alt=logo><br>
<a id="a9" href="admin.php">Home</a><br>
<a id="a5" href="newuser.php">New User</a><br>
<a id="a6" href="remuser.php">Remove User</a><br>
<a id="a7" href="admin_newcust.php">New Customer</a><br>
<a id="a8" href="admin_remcust.php">Remove Customer</a><br>
</section>

<form method="POST" action="bank.php">
<button id="b0" type="submit" name="submit" style="font-size:2em;margin-top:12%;margin-right:1%;"">Logout</button>
</form>
<div><center>
LEGO BANK<br>
MAN ME HAI VISHWAAS...</center>
</div>
<section id="s2">

<form method="POST" action="delete.php">  

<table cellpadding = 10>
<tr>
<td><label>Customer ID:</label></td>
<td>
<input type=text name=cust autofocus>
<?php
echo $custErr;
?>
</td>
</table>

<button id= "b3" type="submit" name="submit">Continue</button>

</section>
</body>
</html>