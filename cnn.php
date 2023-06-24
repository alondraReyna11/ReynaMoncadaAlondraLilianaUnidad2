<meta charset="utf-8">
<link rel="icon" href="images/icono-buro.png">
<?php 
# CDN de MDB 4.19.0
require_once 'cdn.html';
?>

<?php

/* Conectar a una base de datos de MySQL Local */
$db_host = 'mysql:dbname=agencia;host=localhost';
$usuario = 'root';
$contrasena = '';

try {
	$cnnPDO = new PDO($db_host, $usuario, $contrasena);
} catch (PDOException $e) {

	echo "<br><br><center>
	<div class='card text-white bg-danger mb-3' style='max-width: 50rem;'>
	<div class='card-header'><h3>Error de Conexión</h3></div>
	<div class='card-body'>
	<h4 class='card-title'>Ha surgido un error y no se puede conectar a la base de datos!</h4>
	<h5 class='card-title'>Detalle:</h5>
	<p class='card-text text-white'>". $e->getMessage()."</p>
	</div>
	</div>
	";
}
$con = mysqli_connect('localhost','root','','agencia');
$cone = mysqli_connect('localhost','root','','agencia');
?>
<?php
	
	$mysqli = new mysqli("localhost","root","","agencia"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>


