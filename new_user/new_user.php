<!DOCTYPE html>
<html lang="en">

<head>
	<title>New Photographer</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Photography Website</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<!-- main css -->
	<link rel="stylesheet" href="../css/style.css">

</head>

<body>
	<div id="dashboard">
        <div><a href="/photography_web/home.php"><i class="fa fa-home fa-2x"></i></a></div>
        <div><a href="/photography_web/upload_image/upload_image.php"><i class="fa fa-upload fa-2x"></i></a></div>  
        <div><a href="/photography_web/new_user/new_user.php"><i class="fa fa-user-plus fa-2x"></i></a></div>
        <div><a href="/photography_web/login/login.php"><i class="fa fa-user fa-2x"></i></a></div>
    </div>
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg_01.gif');"></div>
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="new_uerbackend.php" method="post">
					<span class="login100-form-title p-b-59">
						NEW PHOTOGRAPHER.
					</span>

					<div class="wrap-input100 validate-input" data-validate="First Name is required">
						<span class="label-input100">First Name</span>
						<input class="input100" type="text" name="f_name" placeholder="First Name...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Lsst Name is required">
						<span class="label-input100">Last Name</span>
						<input class="input100" type="text" name="l_name" placeholder="Last Name...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Date of Birth is required">
						<span class="label-input100">Date Of Birth</span>
						<input class="input100" type="date" name="dob" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Passwords not same">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="text" name="repeat-pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn" name="signup">
								Sign Up
							</button>
						</div>

						<a href="../login/login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>