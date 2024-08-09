<?php

//connect to database
$host = "localhost";
$username = "root@localhost";
$password = "gandaksa33";
$database = "rusestudio";
$conn = new mysqli($host, $username, $password, $database); //must inorder like above

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
$sql = "INSERT INTO form_tbl (name,email,country,comment) VALUES ('$name', '$email', '$country', '$comment')";
if ($conn->query($sql)==TRUE){
	echo "Form Submitted Successfully";
}
else {
	echo "Error: ".$sql."<br>".$conn->error;
}
?>
