<?php session_start()?>
<?php 
unset($_SESSION['name']);
unset($_SESSION['password']);
session_destroy();
header("Location: index.php");
?>