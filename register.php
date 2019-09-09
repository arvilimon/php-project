<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>register</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
    <link rel="stylesheet" href="css/style.css"/>
    
</head>
<body class="form-v9">
	<div class="page-content">
		<div class="form-v9-content" style="background-image: url('images/form-v9.jpg')">
			<form class="form-detail" action="register.php" method="post">
				<h2>Registration Form</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="name" id="full-name" class="input-text" placeholder="Your Name" required>
					</div>
					<div class="form-row">
						<input type="email" name="email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					</div>
					<div class="form-row">
						<input type="password" name="confirm-password" id="confirm-password" class="input-text" placeholder="Comfirm Password" required>
					</div>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
			<?php 
				if ($_SERVER["REQUEST_METHOD"]=='POST') {
					$name = $_POST['name'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$confirm_password = $_POST['confirm-password'];

				require_once 'db.php';

				$check = "SELECT count(*) as email_address FROM reg_log WHERE email = '$email'";

				$result = mysqli_query($db,$check);
                $final = mysqli_fetch_assoc($result);

                if($final['email_address']== 0) {
					$insert = "INSERT INTO `reg_log`(`name`, `email`, `password`, `confirm-password`) VALUES ('$name','$email','$password','$confirm_password')";
					
					
				if(mysqli_query($db,$insert)){
					echo "<span style='color:#fff'> your Registration is Confirm now you are loggedin <a href='Login.php'><button>Login<button></a></span>";
				}
				  }else{
				  	echo "your eamil is already use!..";
				  }
				}

			 ?>
		</div>
	</div>
</body>
</html>