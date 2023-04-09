<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	

	//create connection
	$conn = new mysqli('localhost','root','','foodigo');
	
	if ($conn->connect_error){
		
		die('Connection Failed : ' .$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into contactus(firstName, lastName, email, message) values(?,?,?,?)");
		$stmt->bind_param("ssss",$firstName,$lastName,$email,$message);
		$stmt->execute();
		echo"Submission Successfully....";
		$stmt->close();
		$conn->close();
	}
		
?>	