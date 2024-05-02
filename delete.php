<?php session_start(); ?>
<?php
include'connect.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$sql = mysqli_query($conn,"DELETE FROM photos WHERE ID = $id;");
	if ($sql == TRUE) {
		header("Location: admin-gallery.php");
	}
}
?>