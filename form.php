<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','rusestudio');

// get the post records
$name = $_POST['name'];
$phoneno = $_POST['phoneno'];
$age = $_POST['age'];
$country = $_POST['country'];
$bio = $_POST['bio'];

// database insert SQL code
$sql = "INSERT INTO `info` (`name`, `phoneno`, `age`, `country`, `bio`) VALUES ('$name', '$phoneno', '$age', '$country', '$bio')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Feedback summited";
}

?>
