<?php
// Obtener los datos del formulario de registro
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fechaNacimiento = $_POST['fecha_nacimiento'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Realizar la conexión a la base de datos (suponiendo que tienes los detalles de conexión)

$severname="localhost";
$username="root";
$password="";
$dbname="agencia";
$conexion=mysqli_connect($severname,$username,$password,$dbname) 
or die("Error".mysqli_error($conexion));

// Insertar los datos en la tabla "registro"
$sqlRegistro = "INSERT INTO registro (Nombre, Apellido, FechaNacimiento, Direccion, CorreoElectronico, Telefono)
                VALUES ('$nombre', '$apellido', '$fechaNacimiento', '$direccion', '$correo', '$telefono')";

if (mysqli_query($conexion, $sqlRegistro)) {
    // Obtener el ID generado para el registro insertado
    $idRegistro = mysqli_insert_id($conexion);

    // Insertar los datos en la tabla "login" vinculando con el ID de registro
    $sqlLogin = "INSERT INTO login (correoElectronico, Contrasena, ID_Registro)
                 VALUES ('$correo', '$contrasena', '$idRegistro')";

    if (mysqli_query($conexion, $sqlLogin)) {
        echo "Registro exitoso. Puedes iniciar sesión ahora.";
    } else {
        echo
        "Error al insertar datos de inicio de sesión: " . mysqli_error($conexion);
    }
    } else {
    echo "Error al insertar datos de registro: " . mysqli_error($conexion);
    }
    
    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
    ?>