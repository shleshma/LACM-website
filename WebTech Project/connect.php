<!DOCTYPE html>
<html>
<head>
	<title>Message Sent</title>
</head>
<?php
$servername="localhost";

$username = "root";

$password="";

$dbname="user_messages";

$conn= new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
	die ("Connection failure: ".$con->connect_error);
}
$sql = "CREATE TABLE `user_messages`.`tbluser` (`userID` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `message` VARCHAR(1000) NOT NULL , PRIMARY KEY (`userID`)";

if($conn->query($sql)===TRUE){
	echo "Message sent successfully!";
}
else {
	echo "Error: " . $conn->error;
}
$conn->close();
?>
<body>
	<h1>Thank you for sending a message.</h1>

</body>
</html>
