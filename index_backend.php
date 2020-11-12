<?php
session_start();
	if(!isset($_SESSION['login']))
	{
		header("location:login/login.php");
	}
   $con=mysqli_connect("localhost", "root", "", "photography");
   $sql="SELECT * FROM images WHERE insertion_date!='' ORDER BY insertion_date DESC";
	if(isset($_GET['location']))
	{
	 $location=$_GET["location"];
	 $sql="SELECT * FROM images WHERE location='$location'";	
	}
	else if(isset($_GET['near']))
	{
	 $location=$_GET["near"];
	 $sql="SELECT * FROM images WHERE location='$location'";	
	}
	else if(isset($_GET['type']))
	{
	 $location=$_GET["type"];
	 $sql="SELECT * FROM images WHERE type='$location'";	
	}	
	
	$result=$con->query($sql);
	$response=array();
	foreach ($result as $key => $value) {
		$response[]=$value;
	}
	// print_r($response);
	// die();
?>