<?php
$con=mysqli_connect("localhost", "root", "", "photography");
if(isset($_POST['submit']));
// print_r($_POST);
// print_r($_FILES);
// die();
$title=$con->real_escape_string($_POST['title']);
$numbers=$con->real_escape_string($_POST['number']);
$type=$con->real_escape_string($_POST['type']);
$image_name=rand().$_FILES['img']['name'];
$address=$_FILES['img']['tmp_name'];
if(isset($_FILES))
{
 $upload=move_uploaded_file($address, "images/$image_name");
}

$description=$con->real_escape_string($_POST['des']);
$location=$con->real_escape_string($_POST['loaction']);
date_default_timezone_set('Europe/London'); // Set the local time zone for get the local time
$date_now = date("Y-m-d H:i:s A"); // this format is string comparable
session_start();
$id=$_SESSION['login'];
if($upload)
{
  $insert="INSERT INTO images (title,numbers,image,description,location,insertion_date,inserted_by,type) VALUES ('$title','$numbers','$image_name','$description','$location','$date_now',$id,'$type')";
  $check=$con->query($insert);
}

if ($check){
	echo "Data is inserted sucessfully";
	header( "Refresh:2; url=../home.php");
} 

?>