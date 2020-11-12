<?php include_once("login_backend.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login_backend.php" method="post">
					<span class="login100-form-logo">
					<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_Op3Uat.json"  background="transparent"  speed="1"  style="width: 80px; height: 80px;"  loop autoplay></lottie-player>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
                    
					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<!-- <div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div> -->

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button name="login" type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					
				</form>
				<div class="container-signup100-form-btn">
						<button class="signup100-form-btn">
							<a href="/photography_web/new_user/new_user.php">Sign Up</a>
						</button>
					</div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<script type="text/javascript">
	if("<?php echo $_GET['error']?>")
	{
    alert("<?php echo $_GET['error']?>");
	}
</script>