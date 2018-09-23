<?php include 'customer.php';?>
<!DOCTYPE html>
<head>
<title>NETBANKING</title>
<style>
#s10{
display:none;
}
#s2{
float: left;
margin-left:2%;
margin-top: 2%;
border: 5px outset gray;
padding: 1em;
background-color: black;
color: red;
font-size:2em;	
border-radius:15px;
width:500px;
}

input{
font-size:0.4em;
font-weight:bold;
padding: 12px 20px;   
margin: 8px 0;
box-sizing: border-box;
border-radius:15px;
}
#a4:link, #a4:visited {
float:left;
background-color:cyan;
color: white;
padding: 14px 25px;
text-align: center;
text-decoration: none;  
display: inline-block;
width:300px;
}

 #a4:active {
 background-color:black;
 color:cyan;
}

#div1{
font-size:2em;
font-weight:bold;
margin-bottom: -40%;
margin-left: 15%;
}
</style>
</head>
<body>
<?php
$custErr="";
$amountErr="";
$purposeErr="";
$cs=1;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{  
$cust = a($_POST["cust"]);
$amount=a($_POST["amount"]);
$purpose = a($_POST["purpose"]);
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
    $cs=0;
  }

  if (empty($amount)) 
  {
    $amountErr = " * Amount is required";$cs++;
  } 


  if (empty($purpose)) 
  {
    $purposeErr = " * Please mention the purpose of your transaction";$cs++;
  } 

}

function a($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($cs==0)
{
echo "<br><br><br><br><br><br><br><br><br><br>"; 	
echo "<span id='div1'>Your transaction has been successfully completed.</span>";
echo"<section style='display:none;'>";
}
?>
<section id="s2">
<form action="net.php"  method="POST">

<table cellpadding=10>
<tr><td>
<label>Customer ID:</label>
</td>
<td>
<?php
echo "<input type=text name=cust autofocus>";
echo $custErr;
?>
</td></tr>
<tr><td>
<label>Amount:</label>
</td>
<td>
<input type="number" name="amount" >
<?php
echo $amountErr;
?>
</td></tr>
<tr><td>
<label>Purpose:</label>
</td>
<td>
<input type=text name=purpose >
<?php
echo $purposeErr;
?>
</td></tr>
</table>
<br>
<button id="b0" type="submit" name="submit">Continue</button>
</section>
</body>
</html>