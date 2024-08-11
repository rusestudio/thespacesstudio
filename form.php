?>
<?php
// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','rusestudio');

// get the post records

$name = $_POST['name'];
$email = $_POST['email'];
$country = $_POST['country'];
$comment = $_POST['comment'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`id`, `name`, `email`, `country`, `comment`) VALUES ('0', '$name', '$email', '$country', '$comment')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
