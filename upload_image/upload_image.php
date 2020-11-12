<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("location:../login/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Upload Images</title>
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
			<div class="wrap-login100">
				<div class="login100-form-title">
					<span class="login100-form-title-1">
						Upload Image
					</span>
				</div>

				<form class="login100-form validate-form" action="upload_imagebackend.php" method="post" enctype="multipart/form-data">
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Title</span>
						<input class="input100" type="text" name="title" placeholder="Title...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Description</span>
						<input class="input100" type="text" name="des" placeholder="Enter description...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Tags</span>
						<input class="input100" type="text" name="type" placeholder="Enter tags...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Location</span>
						<input class="input100" type="text" name="loaction" placeholder="Enter a location...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Choose Image</span>
						<input class="input100" type='file' name="img" placeholder="Choose a file...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Number</span>
						<input class="input100" type="text" name="number" placeholder="0">
						<span class="focus-input100"></span>
					</div>
					<div class="flex-sb-m w-full p-b-30">
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Upload
						</button>
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