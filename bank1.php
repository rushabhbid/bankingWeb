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

<!--create new account , withdraw,deposit,loan,etc.-->
<body bgcolor="cyan">
<?php

session_start();

 ?>

<div><center>
LEGO BANK<br>
MAN ME HAI VISHWAAS...</center>
</div>

<section id="s2">
<form action="loginvalid.php"  method="POST">

<table>
<tr><td>
<label>User ID:</label>
</td>
<td>
<?php
echo "<input type=text name=cust disabled value=".$_SESSION['uid'].">";
?>
</td></tr>
<tr><td>
<label>Password:</label>
</td>
<td>
<input type="password" name="pass" autofocus>
<?php
echo $_SESSION['passErr'];
?>
</td></tr>
</table>
<br>
<input type="submit" id="b2" name="submit" value="&#128274; Login"></input>
</section>

<section id="s3">
FORGOT PASSWORD ?<br>
<a href="forgot3.php"><h7 style="font-size:0.898em;color:white;">RETRIEVE PASSWORD</h7></a>
</section>

</body>
</html>