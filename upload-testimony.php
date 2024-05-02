<?php 
include 'connect.php';

if (isset($_POST['upload'])) {
	$target = "Testimony/" . basename($_FILES["image"]["name"]);
	$name = $_POST['name'];
	$profession = $_POST['profession'];
	$testimony = $_POST['testimony'];
	$rate = $_POST['rate'];
	$image = $_FILES["image"]["name"];
	$date = date("d-m-Y");

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {

	$sql = "INSERT INTO testimony(ID,Names,Profession,Testimony,Image,Date) VALUES('','$name','$profession','$testimony','$image','$date')";
	$connect = mysqli_query($conn,$sql);
	if ($connect == TRUE) {
		header("Location: admin-about.php");
	}
	else{
		header("Location: upload-testimony-error.php");
	}
}
	/*else{
		header("Location: upload-testimony-error.php");
	}*/
	}
?>