<?php 
	require '../db.php';

	$name = $_POST["name"];
	$email = $_POST["email"];
	$massage = $_POST["message"];

	$insert = "INSERT INTO contact(name,email,massage) VALUES('$name','$email','$massage')";

	mysqli_query($db,$insert);

	header('location: ../index.php');
 ?>