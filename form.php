<?php

//connect to database
if(isset($_POST['name']))
{
$conn = mysqli_connect('localhost', 'root', '','rusestudio');

//check if connect
if ($conn-> connect_error){
	die("Connection failed: " . $conn->connect_error);
}

// get data
$name = $_POST['name'];
$email = $_POST['email'];
$country = $_POST['country'];
$comment = $_POST['comment'];

//insert data to database table
$sql = "INSERT INTO `form_tbl` (`Id`, `name`, `email`, `country`, `comment`) VALUES ( '0', $name', '$email', '$country', '$comment')";
if ($conn->query($sql)===TRUE){
	echo "Form Submitted Successfully";
}
else {
	echo "Error: ".$sql."<br>".$conn->error;
}
?>
