<?php include 'connect.php'; ?>
<!DOCTYPE html>
<head>
<title>EMPLOYEE_ADD_USER</title>
<style>
#s1{
float: left;
margin-top:-1%;
margin-left:-1%;
border: 5px outset gray;
background-color: black;
color: red;
font-size:2em;	
height:1750px;
}

#s2{
float: left;
background-color: black;
color: red;
font-size:2em;	
height:1500px;
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

#a5:link, #a5:visited {
float:left;
background-color:cyan;
color: white;
padding: 14px 25px;
text-align: center;
text-decoration: none;  
display: inline-block;
width:300px;
}

#a5:active {
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

option{
font-size:1.2em;
font-weight:bold;
padding: 12px 20px;   
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

#span1{
font-weight:bold;
font-size:2em;
background-color:black;
color:red;
padding: 12px 20px;  
height:160px;
width:440px;
margin-left:30%;
margin-top:10%;	
}
</style>
</head>
<body bgcolor=cyan>
<?php
session_start();

$ano=000000;
$id=7860000;
$anc=1;
$namesErr="";
$fnameErr="";
$mnameErr="";
$dobErr="";
$genErr="";
$emailErr="";
$addErr="";
$aadharErr="";
$conErr="";
$accErr="";
$gender="Mr.";
$sec1Err="";
$secans1Err="";
$sec2Err="";
$secans2Err="";
$sec3Err="";
$secans3Err="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{  
    $names = a($_POST["names"]);
	$_SESSION['names']=$names;
    $fname = a($_POST["fname"]);
    $mname = a($_POST["mname"]);
    $add = a($_POST["add"]);
    $dob = a($_POST["dob"]);
    $gen_value= a($_POST["gen"]);
    $email= a($_POST["email"]);
    $aadhar = a($_POST["aadhar"]);
    $con = a($_POST["con"]);
    $acc = a($_POST["acc"]);
    $sec1 = a($_POST["sec1"]);
    $secans1 = a($_POST["secans1"]);
    $sec2 = a($_POST["sec2"]);
    $secans2 = a($_POST["secans2"]);
    $sec3 = a($_POST["sec3"]);
    $secans3 = a($_POST["secans3"]);

 if (empty($names)) 
  {
    $namesErr = " * Name is required";
  } 
  elseif(strlen($names)<3)
  {
    $namesErr = " * Minimum length of name should be 3";	   
  }
  elseif(strlen($names)>10)
  {
    $namesErr = " * Maximum length of name should be 10";	   
  }
 else
  {
    $anc=0;
   }

  if (empty($fname)) 
  {
    $fnameErr = " * Father's name is required";$anc++;
  } 
  elseif(strlen($fname)<3)
  {
    $fnameErr = " * Minimum length of name should be 3";$anc++;	   
  }
  elseif(strlen($fname)>10)
  {
    $fnameErr = " * Maximum length of name should be 10";$anc++;	   
  }


  if (empty($mname) )
  {
    $mnameErr = " * Mother's name is required";$anc++;
  } 
  elseif(strlen($mname)<3)
  {
    $mnameErr = " * Minimum length of name should be 3";$anc++;	   
  }
  elseif(strlen($mname)>10)
  {
    $mnameErr = " * Maximum length of name should be 10";$anc++;	   
  }



 if (empty($dob)) 
  {
    $dobErr = " * Date of Birth is required";$anc++;
  } 

 if (empty($gen_value)) 
  {
    $genErr = " * Gender is required";$anc++;
  } 
 elseif($gen_value=="M")
   {
    $_SESSION['gender']="Mr.";
   }
 elseif($gen_value=="F")
   {
    $_SESSION['gender']="Mrs.";
   }

 if (empty($email)) 
  {
    $emailErr = " * Email is required";$anc++;
  } 

  if (empty($add) )
  {
    $addErr = " * Address is required";$anc++;
  } 

  if (empty($aadhar)) 
  {
    $aadharErr = " * Aadhar card number is required";$anc++;
  } 
  elseif(strlen($aadhar)!=12)
  {
    $aadharErr = " * Aadhar Card number should be 12 digits long";$anc++;	   
  }

  if (empty($con)) 
  {
    $conErr = " * Contact number is required";$anc++;
  } 
  elseif(strlen($con)!=10)
  {
    $conErr = " * Contact number should be 10 digits long";$anc++;  
  }

 
if (empty($acc)) 
  {
    $accErr = " * Account type is required";$anc++;
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


<form  method="POST" action="createuser.php">
<section id="s2">
<table cellpadding=10>
<tr>
<td><label>Name:</label></td>
<td>
<input type=text name=names autofocus> 
<?php
echo $namesErr;
?>
</td></tr>

<tr>
<td><label>Fathers Name:</label></td>
<td>
<input type=text name=fname>
<?php
echo $fnameErr;
?>
</td></tr>

<tr>
<td><label>Mother's Name:</label></td>
<td>
<input type=text name=mname>
<?php
echo $mnameErr;
?>
</td></tr>

<tr>
<td><label>DOB:</label></td>
<td>
<input type=date name=dob>
<?php
echo $dobErr;
?>
</td></tr>

<tr>
<td><label>Email:</label></td>
<td>
<input type=email name=email>
<?php
echo $emailErr;
?>
</td></tr>

<tr>
<td><label>Gender:</label></td>
<td>
<input type="radio" name="gen" value="M" checked><h7 style="color:cyan;">Male</h7> &nbsp;
<input type="radio" name="gen" value="F"><h7 style="color:cyan;">Female</h7>
<?php
echo $genErr;
?>
</td></tr>

<tr>
<td><label>Address:</label></td>
<td>
<textarea name=add rows=10 cols=40></textarea>
<?php
echo $addErr;
?>
</td></tr>

<tr>
<td><label>Contact:</label></td>
<td>
<input type=tel name=con>
<?php
echo $conErr;
?>
</td></tr>

<tr>
<td><label>Aadhar Card No:</label></td>
<td>
<input type=text name=aadhar>
<?php
echo $aadharErr;
?>
</td></tr>

<tr>
<td><label>Account Type:</label></td>
<td>

<select name = "acc">
    <option value=Single >Single</option>
   <option value=Joint>Joint</option>
</select>
<?php
echo $accErr;
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
</td></tr>
</table>
<br>

<button id="b3" type=submit name="admin_newcust" value=REGISTER >REGISTER</button>

</form>
</section>
</body>
</html>