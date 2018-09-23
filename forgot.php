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
height:1000px;
width:1025px;
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
margin-right:53%;
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
$seco="o10";
$custErr="";
$sec1Err="";
$secans1Err="";
$sec2Err="";
$secans2Err="";
$sec3Err="";
$secans3Err="";
$c=1;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{  
 $cust = a($_POST["cust"]);
    $sec1 = a($_POST["sec1"]);
    $secans1 = a($_POST["secans1"]);
    $sec2 = a($_POST["sec2"]);
    $secans2 = a($_POST["secans2"]);
    $sec3 = a($_POST["sec3"]);
    $secans3 = a($_POST["secans3"]);

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
  
 if (empty($sec1)) 
  {
    $sec1Err = " * Please choose your 1st security question";$anc++;
  } 

  if (empty($secans1))
  {
    $secans1Err = " * Please answer your 1st security question";$anc++;
  } 

 if (empty($sec2)) 
  {
    $sec2Err = " * Please choose your 2nd security question";$anc++;
  } 

 if (empty($secans2))
  {
    $secans2Err = " * Please answer your 2nd security question";$anc++;
  } 

 if (empty($sec3)) 
  {
    $sec3Err = " * Please choose your 3rd security question";$anc++;
  } 

  if (empty($secans3))
  {
    $secans3Err = " * Please answer your 3rd security question";$anc++;
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

<div><center>
LEGO BANK<br>
MAN ME HAI VISHWAAS...</center>
</div>
<section id="s0">
<form action="forgot.php" method="POST">
<table cellpadding = 10>
<tr>
<td><label>Customer ID:</label></td>
<td>
<input type=text name=cust autofocus value=7860000>
<?php
echo $custErr;
?>
</td></tr>
<tr>
<td><label>Security Question 1:</label></td>
<td>
<select name = "sec1">
    <option value=o1 >What was your nickname in childhood?</option>
   <option value=o2>What was the name of your first gf/bf?</option>
   <option value=o3>What is the name of your spouse?</option>
   <option value=o4>What is the name of your pre-primary teacher?</option>
   <option value=o5>What is your favourite place for a destination wedding?</option>
   <option value=o6>What time of the day were you born?</option>
   <option value=o7>Which elementary school did you go in?</option>
   <option value=o8>What is your driver’s license number?</option>
   <option value=o9>What was your first email id?</option>
   <option value=o10>Write my own security question?</option>
</select>
<?php
echo $sec1Err;
?>
</td></tr>
<tr>
<td><label>Answer:</label></td>
<td>
<input type=text name=secans1>
<?php
echo $secans1Err;
?>

<tr>
<td><label>Security Question 2:</label></td>
<td>
<select name = "sec2">
    <option value=o1 >What was your nickname in childhood?</option>
   <option value=o2>What was the name of your first gf/bf?</option>
   <option value=o3>What is the name of your spouse?</option>
   <option value=o4>What is the name of your pre-primary teacher?</option>
   <option value=o5>What is your favourite place for a destination wedding?</option>
   <option value=o6>What time of the day were you born?</option>
   <option value=o7>Which elementary school did you go in?</option>
   <option value=o8>What is your driver’s license number?</option>
   <option value=o9>What was your first email id?</option>
   <option value=o10>Write my own security question?</option>
</select>
<?php
echo $sec2Err;
?>
</td></tr>
<tr>
<td><label>Answer:</label></td>
<td>
<input type=text name=secans2>
<?php
echo $secans2Err;
?>
</td></tr>

<tr>
<td><label>Security Question 3:</label></td>
<td>
<select name = "sec3">
    <option value=o1 >What was your nickname in childhood?</option>
   <option value=o2>What was the name of your first gf/bf?</option>
   <option value=o3>What is the name of your spouse?</option>
   <option value=o4>What is the name of your pre-primary teacher?</option>
   <option value=o5>What is your favourite place for a destination wedding?</option>
   <option value=o6>What time of the day were you born?</option>
   <option value=o7>Which elementary school did you go in?</option>
   <option value=o8>What is your driver’s license number?</option>
   <option value=o9>What was your first email id?</option>
   <option value=o10>Write my own security question?</option>
</select>
<?php
echo $sec3Err;
?>
</td></tr>
<tr>
<td><label>Answer:</label></td>
<td>
<input type=text name=secans3>
<?php
echo $secans3Err;
?>
</td></tr>

</table>
<button id= "b2" type="submit" name="submit">Continue</button>

</section>

</body>
</html>