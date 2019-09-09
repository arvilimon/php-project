<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V3</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fontss/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fontss/iconic/css/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="limiter">
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
				<span class="login100-form-logo">
					<i class="zmdi zmdi-landscape"></i>
				</span>

				 <span class="login100-form-title p-b-34 p-t-27">Log in </span>
						
					
			<div class="wrap-input100 validate-input" data-validate = "Enter username">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100" data-placeholder="&#xf207;"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate="Enter password">
		            <input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100" data-placeholder="&#xf191;"></span>
			</div>

			<div class="contact100-form-checkbox">
					<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
					<label class="label-checkbox100" for="ckb1">Remember me</label>
							
			</div>

			<div class="container-login100-form-btn">
					<button class="login100-form-btn">Login</button>		
			</div>

			<div class="text-center p-t-90">
					<a class="txt1" href="#">Forgot Password?</a>
			</div>

	</form>

				<?php 
						if ($_SERVER['REQUEST_METHOD']=='POST') {
							$email = $_POST['email'];
							$password = $_POST['password'];

						require_once 'db.php';

						$login_email = "SELECT count(*) as check_email_pass, id,name, email,password FROM reg_log WHERE email='$email' AND password='$password'";

						$login_result = mysqli_query($db,$login_email);
						$final_login_result = mysqli_fetch_assoc($login_result);

						if($final_login_result['check_email_pass'] == 1)
						{
							$_SESSION['your_name'] = $final_login_result['name'];
							$_SESSION['your_email'] = $final_login_result['email'];
							$_SESSION['your_id'] = $final_login_result['id'];
							$_SESSION['your_password'] = $final_login_result['password'];

							header('location: Admin_Pannel/dashboard.php');
						}else{
							echo "your email or password is invalid";

						}

					}

					 ?>
			</div>
		</div>
	</div>




	

	<div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>