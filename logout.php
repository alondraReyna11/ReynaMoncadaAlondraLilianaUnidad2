<?php 
session_start();
unset($_SESSION['correo']);
unset($_SESSION['contrasena']);
header("location:login.php");
die();
?>

