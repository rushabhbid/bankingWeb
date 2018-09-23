<!DOCTYPE html>
<head>	
<style>
#s0{
float: left;
margin-left:-1%;
background-color: black;
color: red;
font-size:2em;	
height:1000px;
}

#s1{
float:left;
font-size:2em;
margin-top:-1%;
border: 5px outset grey;
margin-left:-1%;
background:black;
height:1000px;
}

#s10{
font-size:4em;
font-family:Impact;
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
background-color: #417cb8;
}

#b1:active,
#b1.active {
 background-color: #417cb8;
 box-shadow: 0 5px #27496d;
 transform: translateY(5px);
}

</style>
</head>
<body bgcolor=cyan>
<section id="s1">
<img src="logo.jpg"  alt=logo><br>
<a id="a9" href="customer.php">Home</a><br>
<a id="a1" href="passbook.php">Passbook</a><br>
<a id="a2" href="transaction.php">Transaction</a><br>
<a id="a3" href="neft.php">Neft/Rtgs</a><br>
<a id="a4" href="net.php">Netbanking</a>
</section>

<form method="POST" action="bankstart.php">
<button id="b0" type="submit" name="submit" style="font-size:2em;margin-top:12%;margin-right:1%;">Logout</button>
</form>

<form action = "wtg.php">
<button id="b0" type="submit" name="submit" style="font-size:2em;margin-top:12%;margin-right:1%;">Exit</button>
</form>

<div><center>
LEGO BANK<br>
MAN ME HAI VISHWAAS...</center>
</div>
<section id="s10"><b><i><u>ACCOUNT SUMMARY</u></i></b></section>
</body>
</html>