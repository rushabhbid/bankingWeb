<!--name
father's name
mother's name
dob
address
aadhar card number
contact
sex
acc type
operation instruction//joint or single-->

<!DOCTYPE html>
<head>
<title>REGISTER</title>
<style>
section {
float: left;
margin-right: 20%;
margin-top: -10%;
border: 5px outset gray;
padding: 1.5em;
background-color: black;
color: red;
font-size:2em;	
border-radius:15px;
}

input,select{
font-size:0.5em;
font-weight:bold;
padding: 12px 20px;   
margin: 8px 0;
box-sizing: border-box;
border-radius:15px;
}

select{
font-size:0.6em;
}

button {
  float:right;
  color: #fff;
  background-color: #6496c8;
  border: none;
  border-radius: 15px;
  box-shadow: 0 10px #27496d;
  font-size:1em;
}
button:hover,
button.hover {
  background-color: #417cb8;
}
button:active,
button.active {
  background-color: #417cb8;
  box-shadow: 0 5px #27496d;
  transform: translateY(5px);
}

div{
margin-top:15%;
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
$namesErr="";
$fnameErr="";
$mnameErr="";
$dobErr="";
$addErr="";
$aadharErr="";
$genErr="";
$conErr="";
$accErr="";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{  
 if (empty($_POST["names"])) 
  {
    $namesErr = " * Name is required";
  } 
  elseif(strlen($_POST["names"])<3)
  {
    $namesErr = " * Minimum length of name should be 3";	   
  }
  elseif(strlen($_POST["names"])>10)
  {
    $namesErr = " * Maximum length of name should be 10";	   
  }
  else
  {
    $names = ($_POST["names"]);
  }

  if (empty($_POST["fname"])) 
  {
    $fnameErr = " * Father's name is required";
  } 
  elseif(strlen($_POST["fname"])<3)
  {
    $fnameErr = " * Minimum length of name should be 3";	   
  }
  elseif(strlen($_POST["fname"])>10)
  {
    $fnameErr = " * Maximum length of name should be 10";	   
  }
  else 
  {
    $fname = ($_POST["fname"]);
  }

  if (empty($_POST["mname"])) 
  {
    $mnameErr = " * Mother's name is required";
  } 
  elseif(strlen($_POST["mname"])<3)
  {
    $mnameErr = " * Minimum length of name should be 3";	   
  }
  elseif(strlen($_POST["mname"])>10)
  {
    $mnameErr = " * Maximum length of name should be 10";	   
  }
  else 
  {
    $mname = ($_POST["mname"]);
  }

 if (empty($_POST["dob"])) 
  {
    $dobErr = " * Date of Birth is required";
  } 
  else 
  {
    $dob = ($_POST["dob"]);
  }

  if (empty($_POST["add"])) 
  {
    $addErr = " * Address is required";
  } 
  else 
  {
    $add = ($_POST["add"]);
  }

  if (empty($_POST["aadhar"])) 
  {
    $aadharErr = " * Aadhar card number is required";
  } 
  elseif(strlen($_POST["aadhar"])!=12)
  {
    $aadharErr = " * Aadhar Card number should be 12 digits long";	   
  }
  else 
  {
    $aadhar = ($_POST["aadhar"]);
  }

 if (empty($_POST["gen"])) 
  {
    $genErr = " * Gender is required";
  } 
  else 
  {
    $gen = ($_POST["gen"]);
  }

  if (empty($_POST["con"])) 
  {
    $conErr = " * Contact number is required";
  } 
  elseif(strlen($_POST["aadhar"])!=10)
  {
    $aadharErr = " * Contact number should be 10 digits long";	   
  }
  else 
  {
    $con = ($_POST["con"]);
  }
 
if (empty($_POST["acc"])) 
  {
    $accErr = " * Account type is required";
  } 
  else 
  {
    $acc = ($_POST["acc"]);
  }
}


function ($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>



<form  method="POST" action="register.php">
<section>
<table cellpadding=10>
<tr>
<td><label>Name:</label></td>
<td>
<input type=text name=names> 
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
<td><label>Address:</label></td>
<td>
<textarea name=add rows=10 cols=40></textarea>
<?php
echo $addErr;
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
<td><label>Gender:</label></td>
<td>
<input type=radio name=m value=M ><h7 style="color:cyan;">Male</h7> &nbsp;
<input type=radio name=m value=F><h7 style="color:cyan;">Female</h7>
<?php
echo $genErr;
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
<td><label>Account Type:</label></td>
<td>

<select>
    <option value=Single >Single</option>
   <option value=Joint>Joint</option>
</select>
<?php
echo $accErr;
?>
 </td></tr>

</table>
<br>
<input type='submit' value='Validate' onclick="this.form.target='_blank';return true;">
<!--<input type='submit' value='Open test6.php' onclick="f1.action='test6.php';  return true;">-->
<button type=submit name=submit value=REGISTER onclick="f1.action='BANK.php';  return true;">REGISTER</button>

</form>
</section>
<div><center>
LEGO BANK</center>
MAN ME HAI VISHWAAS...
</div>
</body>
</html>