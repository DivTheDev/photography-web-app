<?php
$con=mysqli_connect("localhost", "root", "", "photography");
if(isset($_POST['signup']));
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$dob=$_POST['dob'];
$user_name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['pass'];
$insert="INSERT INTO users (f_name,l_name,dob,user_name,email, password) VALUES ('$f_name','$l_name','$dob','$user_name','$email','$password')";
echo $insert;
$check=$con->query($insert);
// die();
if ($check){
	echo "Data is inserted sucessfully";
	header( "Refresh:2; url=../login/login.php");
} 

?>