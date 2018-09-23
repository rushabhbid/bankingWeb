<?php include 'connect.php'; ?>
<!DOCTYPE html>
<head>

<title>BANK</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<style>
input:focus {
    border: 4px solid cyan;
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

<div><center>
LEGO BANK<br>
MAN ME HAI VISHWAAS...</center>
</div>
"Make it as simple as possible, but not simpler."-Albert Einstein
<section id="s1">

<form method="POST" action="bankvalid.php">  

<table cellpadding = 10>
<tr>
<td><label>User ID:</label></td>
<td>
<input type=text name=cust autofocus>
<?php
session_start();
echo $_SESSION['custErr'];
?>
</td>
</table>
<button id= "b1" type="submit" name="submit">Continue</button>

</section>
</body>
</html>

