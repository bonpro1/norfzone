<?php 
include 'connect.php';

if (isset($_POST['upload'])) {
	$target = "Photos/" . basename($_FILES["image"]["name"]);
	$name = $_POST['name'];
	$cap = $_POST['caption'];
	$descrip = $_POST['description'];
	$image = $_FILES["image"]["name"];
	$date = date("d-m-Y");

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {

	$sql = "INSERT INTO photos(ID,Name,Caption,Description,Image,Date) VALUES('','$name','$cap','$descrip','$image','$date')";
	$connect = mysqli_query($conn,$sql);
	if ($connect == TRUE) {
		header("Location: photos.php");
	}
	else{
		header("Location: photos-upload-error.php");
	}
}
	/*else{
		header("Location: upload-testimony-error.php");
	}*/
	}
?>