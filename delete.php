<?php include 'connect.php'; ?>
<?php $sql = "DELETE FROM customer WHERE username='".$_POST['cust']."';";

if ($conn->query($sql) === TRUE) {
    header('Location: remuser.php');
   exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

?>