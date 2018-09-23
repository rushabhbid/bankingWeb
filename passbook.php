<?php include "customer.php";?>

<!DOCTYPE html>
<head>
<title>PASSBOOK</title>
<style>
#s10{
display:none;
}
#a1:link, #a1:visited {
float:left;
background-color:cyan;
color: white;
padding: 14px 25px;
text-align: center;
text-decoration: none;  
display: inline-block;
width:300px;
}

 #a1:active {
 background-color:black;
 color:cyan;
}

table{
width:77.05%;
border-collapse:collapse;
}
th{
background-color:black;
color:white;
font-size:2em;
border:2px dashed grey;
width:15.41%;
}
</style>
</head>



<?php
session_start();

$user=$_SESSION["cust"];
$db = mysqli_connect('localhost','root','','bank')
or die('Error connecting to MySQL server.');

$sql = "SELECT * FROM transaction WHERE user='$user'";
$result = mysqli_query($db,$sql);



echo '<style>table,th,td{ font-family:"garamond";font-size:110%;} tr:nth-child(even){background-color: #f2f2f2} th,td{padding:4%} table{height:40%;width:60%;margin-left:20%;margin-right:20%;}</style>';
echo "<table>
<tr>
<th>User </th>
<th>Type</th>
<th>Transaction_Amount</th>
<th>Amount_Before</th>
<th>Amount_After</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
    $amt=$row['bef']-$row['aft'];
	if($amt<0)
		$amt=$amt*-1;
 echo "<tr><td>" . $row['user'] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
  echo "<td>" . $amt ."</td>";
  echo "<td>" . $row['bef'] . "</td>";
   echo "<td>" . $row['aft'] . "</td>";
    
  echo "</tr>";
  }




?>



</body>
</html>