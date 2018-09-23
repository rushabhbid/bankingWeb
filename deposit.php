<?php include 'customer.php'; ?>
<?php
session_start();

$user=$_SESSION['cust'];
$amount=$_GET["amount"];
$db = mysqli_connect('localhost','root','','bank')
 or die('Error connecting to MySQL server.');

$sql = "SELECT * FROM customer WHERE user='$user'";
$result=mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result)>0)
	{
		$getAmount = mysqli_fetch_assoc(mysqli_query($db, "SELECT amount FROM customer WHERE user = '$user'"));
	$total = $getAmount['amount'];
	$bef=$total;
	$total=$total+$amount;
	$aft=$total;
	
	$order = "UPDATE customer
            SET amount='$total'
            WHERE user='$user'";

$result = mysqli_query($db,$order);	


	$sql = "INSERT INTO transaction (user,type,bef,aft)
			VALUES
			('$user',
			'Deposit',
			'$bef',
			'$aft')";
		
$result = mysqli_query($db,$sql);	
	
	$getAmount = mysqli_fetch_assoc(mysqli_query($db, "SELECT amount FROM customer WHERE user = '$user'"));
	$total = $getAmount['amount'];
	echo'<h1>After depoit amount is '. $total .' for user ' . $user . '</h1>';
	
	}

	
	

?>
