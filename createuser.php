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
$sql = "SELECT * FROM customer;";
$result = $conn->query($sql);
$_SESSION['luid']=7860001;
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
       $_SESSION['luid']=$row["username"];
    }
}
	
$_SESSION['luid']=$_SESSION['luid']+1;
$sql = "INSERT INTO customer (username, password)
VALUES ('".$_SESSION['luid']."','lego1234')";

if ($conn->query($sql) === TRUE) {
echo "<section id=span1>Hello,<br>Your Customer Id is ".$_SESSION['luid']."<br>Your Password is lego1234<br>Please change your password.</section>";
 echo "<section id ='s2' style='display:none;'>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

</body>
</html>