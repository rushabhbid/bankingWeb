<?php include 'customer.php'; ?><html>
<head>

<style>

#s5 {
float: right;
margin-right: 10%;
margin-top: 2%;
border: 5px outset gray;
padding: 1em;
background-color: black;
color: red;
font-size:2em;	
border-radius:15px;
}

input{
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

</style>

</head>

<section id="s5">

<form method="GET" action="withdraw.php">  

<table cellpadding = 10>
<tr>
<td><label>Amount:</label></td>
<td>
<input type=text name=amount autofocus>
</table>
<button id="b3" type="submit" name="admin">Continue</button>

</section>
</html>