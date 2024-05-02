<?php 
$conn = new mysqli('localhost','root','','sog_images');
if (!$conn) {
	die("Connection Failed" . mysqli_connect_error());
}
?>