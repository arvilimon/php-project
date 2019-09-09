<?php 

	session_start();

	if(!isset($_SESSION['your_name'])){
		header('location: ../login.php');
	}

 ?>