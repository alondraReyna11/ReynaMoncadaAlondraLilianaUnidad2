<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agencia";
    $conexion = mysqli_connect($severname, $username, $password, $dbname) or die("Error" . mysqli_error($conexion));

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
            echo "Error al insertar datos de inicio de sesión: " . mysqli_error($conexion);
        }
    } else {
        echo "Error al insertar datos de registro: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
?>


<html>
	<head>
		<title>Google Recapcha</title>
    <link
    
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link rel="icon" href="img/logo.png" type="image/x-icon" />

<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		
	</head>
	<body style="background-image: url('summer.png'); background-repeat: no-repeat; background-size: cover;">
	
<!-- Image and text -->
    <!-- Navbar -->
    <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-black">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="img/log.png"
          height="40"
          alt="MDB Logo"
          loading="lazy"
        />
        <a class="nav-link" href="index.php">YAB</a>
      </a>
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="link-secondary me-3" href="index.php">
      <i class="fas fa-house"></i>
      </a>
      <a class="link-secondary me-3" href="login.php">
      <i class="fas fa-user"></i>
      </a>

    
        
      
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

    <body>
    <hr>
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-4 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
           <center> <h4 class="mb-2 pb-2 pb-md-0 mb-md-2">Registrar</h3></center>
            <form id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="nombre" name="nombre" required class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Nombre</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="apellido" name="apellido" required class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Apellido</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                  <div class="md-form md-outline input-with-post-icon datepicker">
                    <input placeholder="Select date" type="date" id="fecha_nacimiento" class="form-control form-control-lg"  name="fecha_nacimiento" required>
                    <label for="example">Fecha de Nacimiento</label>
                </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Direccion </h6>

                  <div class="form-outline">
                    <input type="direccion" id="direccion" class="form-control form-control-lg" name="direccion" required />
                  </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="email" class="form-control form-control-lg" name="correo" required />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="telefono" class="form-control form-control-lg" name="telefono" required />
                    <label class="form-label" for="phoneNumber">Telefono</label>
                  </div>
                </div>
                
              </div>

              <div class="row">
                <div class="col-12">
                <div class="form-outline">
                    <input type="tel" id="usuario" class="form-control form-control-lg" name="usuario" required />
                    <label class="form-label" for="phoneNumber">Usuario</label>
                  </div>
                </div>
                
              </div>
              <div class="col-md-6 mb-4">

            <div class="form-outline">
            <input type="text" id="contrasena" name="contrasena" required class="form-control form-control-lg" />
            <label class="form-label" for="lastName">Contraseña</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4"  name="registrarse" value="registrarse">
               REGISTRAR
              </button>
            </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->

  <div class="container p-4">

    <!-- Section: Social media -->
    <section class="mb-1">
      <!-- Facebook -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #25d366" href="#!" role="button">  <i class="fab fa-whatsapp"></i>

      <!-- Instagram -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>

     </section>
    <!-- Section: Social media -->



    <!-- Section: Text -->


  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © YABtravel Agencia de viajes
   2023
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>
