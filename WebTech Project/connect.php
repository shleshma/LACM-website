<!DOCTYPE html>
<html>
<head>
	<title>Message Sent</title>
</head>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$name= $_POST['name'];
	$email= $_POST['email'];
	$message= $_POST['message'];

$servername="localhost";

$username = "root";

$password="";

$dbname="user_messages";

$conn= new mysqli($servername,$username,$password,$dbname);
if ($conn) {
	$sql="insert into tbluser (name, email, message) values('$name', '$email', '$message')";
	$result= mysqli_query($conn, $sql);
	if ($result){
		echo "Data inserted successfully!";
	} else {
		 die("Connection failed: " . mysqli_connect_error());
	}
} else{
	 die("Connection failed: " . mysqli_connect_error());
}
}
?>

<body>
	<h1>Thank you for sending a message.</h1>

</body>
</html>
