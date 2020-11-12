<?php
session_start();
	if(isset($_SESSION['login']))
		{
			header("location:../home.php");
		}

if(isset($_POST['login']))
{
// echo"check user details"; 
	$con=mysqli_connect("localhost", "root", "", "photography");
	$email=$_POST["email"];
	$password=$_POST["pass"];	
	$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
	// echo $sql;
	$result=$con->query($sql);
	// echo $result;
	$result=mysqli_fetch_assoc($result);
	$query=mysqli_num_rows($con->query($sql));
	// print_r($result);
	//  // echo $query; 
	//  die();  
	//check for succcessfully login
	if($query>0 )
	{
	  	echo "Login Sucessfully";  
	  	session_start();
	  	$_SESSION['login']=$result['id'];
	    header("location: ../home.php");
	}

	else
	{
	  	$sql="select * from users where email='$email' ";
		$query1=mysqli_num_rows($con->query($sql));
		
		if($query1>0)
		{
		 	$error = "Password seems to be wrong";   
		}
		else {
		  	$error = "Try Again, Email and/or password seems to be wrong";   
		}
		header("location:../login/login.php?error=".$error); 
	}  

}
?>