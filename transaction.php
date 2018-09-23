<?php include 'customer.php';?>
<!DOCTYPE html>
<head>
<title>TRANSACTION</title>
<style>
#s10{
display:none;
}
#s2{
float:left;
margin-top: 2%;
border: 5px outset gray;
padding: 1em;
background-color: black;
color: red;
font-size:3em;	
border-radius:15px;
}

#s3{
float: left;
margin-top: 2%;
border: 5px outset gray;
padding: 1em;
background-color: black;
color: red;
font-size:3em;	
border-radius:15px;
}


#a2:link, #a2:visited {
float:left;
background-color:cyan;
color: white;
padding: 14px 25px;
text-align: center;
text-decoration: none;  
display: inline-block;
width:300px;
}

#a2:active {
 background-color:black;
 color:cyan;
}

#b0{
cursor:pointer;
margin-top:2%;
margin-right:40%;
}

#b1{
cursor:pointer;
margin-top:2%;
margin-right:36%;
}
</style>
</head>
<body>
<form  action="deposit1.php">
<button type="submit" id="b0"><section id="s2">DEPOSIT</section></button>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br>
<form  action="withdraw1.php">
<button type="submit" id="b1"><section id="s3">WITHDRAW</section></button>
</form>
</body>
</html>