<!DOCTYPE html>
<head>
<title>ADMIN_ADD_CUSTOMER</title>
<script>
    function check1(ques1) {
        if (ques1.selectedIndex == 9) {
            document.getElementById("other-div1").style.display = 'block';
        } else {
            document.getElementById("other-div1").style.display = 'none';
        }
    }
    function check2(ques2) {
        if (ques2.selectedIndex == 9) {
            document.getElementById("other-div2").style.display = 'block';
        } else {
            document.getElementById("other-div2").style.display = 'none';
        }
    }
    function check3(ques3) {
        if (ques3.selectedIndex == 9) {
            document.getElementById("other-div3").style.display = 'block';
        } else {
            document.getElementById("other-div3").style.display = 'none';
        }
    }
</script>
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

#a7:link, #a7:visited {
float:left;
background-color:cyan;
color: white;
padding: 14px 25px;
text-align: center;
text-decoration: none;  
display: inline-block;
width:300px;
}

#a7:active {
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
$secans1Err="";
$secans2Err="";
$secans3Err="";
$wa1Err="";
$wa2Err="";
$wa3Err="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{  
    $names = a($_POST["names"]);
    $fname = a($_POST["fname"]);
    $mname = a($_POST["mname"]);
    $add = a($_POST["add"]);
    $dob = a($_POST["dob"]);
    $aadhar = a($_POST["aadhar"]);
    $gen_value= a($_POST["gen"]);
    $email= a($_POST["email"]);
    $con = a($_POST["con"]);
    $acc = a($_POST["acc"]);
    $secans1 = a($_POST["secans1"]);
    $secans2 = a($_POST["secans2"]);
    $secans3 = a($_POST["secans3"]);
    $wa1 = a($_POST["wa1"]);
    $wa2 = a($_POST["wa2"]);
    $wa3 = a($_POST["wa3"]);
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
    $gender="Mr.";
   }
 elseif($gen_value=="F")
   {
    $gender="Mrs.";
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

 if (empty($wa1))
  {
    $wa1Err = " * Please write your 1st security question";$anc++;
  }

  if (empty($secans1))
  {
    $secans1Err = " * Please answer your 1st security question";$anc++;
  }

 if (empty($wa2))
  {
    $wa2Err = " * Please write your 2nd security question";$anc++;
  }

 if (empty($secans2))
  {
    $secans2Err = " * Please answer your 2nd security question";$anc++;
  } 

 if (empty($wa3))
  {
    $wa3Err = " * Please write your 3rd security question";$anc++;
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

if($anc==0)
{
 echo "<section id=span1>Hello ".$gender .$names."<br>Your Customer Id is ".++$id."<br>Your Password is LEGO1234<br>Please change your password.</section>";
 echo "<section id ='s2' style='display:none;'>";

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


<form  method="POST" action="admin_newcust.php">
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
<td><label>Gender:</label></td>
<td>
<input type="radio" name="gen" value="M" checked><h7 style="color:cyan;">Male</h7> &nbsp;
<input type="radio" name="gen" value="F"><h7 style="color:cyan;">Female</h7>
<?php
echo $genErr;
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
<select id="sec1" onChange="check1(this);">
    <option>What was your nickname in childhood?</option>
   <option>What was the name of your first gf/bf?</option>
   <option>What is the name of your spouse?</option>
   <option>What is the name of your pre-primary teacher?</option>
   <option>What is your favourite place for a destination wedding?</option>
   <option>What time of the day were you born?</option>
   <option>Which elementary school did you go in?</option>
   <option>What is your driver�s license number?</option>
   <option>What was your first email id?</option>
   <option > Write my own security question</option>
</select>
<span id="other-div1" style="display:none;">
<input id="other-input1" name="wa1"></input>
</span>
<?php
echo "<br>$wa1Err";
?>
</td></tr>
<tr>
<td><label>Answer:</label></td>
<td>
<input type=text name=secans1>
<?php
echo "<br>$secans1Err";
?>
<tr>
<td><label>Security Question 2:</label></td>
<td>
<select name = "sec2" onChange="check2(this);">
    <option value=o1 >What was your nickname in childhood?</option>
   <option>What was the name of your first gf/bf?</option>
   <option>What is the name of your spouse?</option>
   <option>What is the name of your pre-primary teacher?</option>
   <option>What is your favourite place for a destination wedding?</option>
   <option>What time of the day were you born?</option>
   <option>Which elementary school did you go in?</option>
   <option>What is your driver�s license number?</option>
   <option>What was your first email id?</option>
   <option>Write my own security question</option>
</select>
<span id="other-div2" style="display:none;">
<input id="other-input2"  name="wa2"></input>
</span>
<?php
echo "<br>$wa2Err";
?>
</td></tr>
<tr>
<td><label>Answer:</label></td>
<td>
<input type=text name=secans2>
<?php
echo "<br>$secans2Err";
?>
</td></tr>

<tr>
<td><label>Security Question 3:</label></td>
<td>
<select name = "sec3" onChange="check3(this);">
    <option value=o1 >What was your nickname in childhood?</option>
   <option>What was the name of your first gf/bf?</option>
   <option>What is the name of your spouse?</option>
   <option>What is the name of your pre-primary teacher?</option>
   <option>What is your favourite place for a destination wedding?</option>
   <option>What time of the day were you born?</option>
   <option>Which elementary school did you go in?</option>
   <option>What is your driver�s license number?</option>
   <option>What was your first email id?</option>
   <option>Write my own security question</option>
</select>
<span id="other-div3" style="display:none;">
<input id="other-input3" name="wa3"></input>
</span>
<?php
echo "<br>$wa3Err";
?>
</td></tr>
<tr>
<td><label>Answer:</label></td>
<td>
<input type=text name=secans3>
<?php
echo "<br>$secans3Err";
?>
</td></tr>
</table>
<br>
<button id="b3" type=submit name="admin_newcust" value=REGISTER >REGISTER</button>

</form>
</section>
</body>
</html>