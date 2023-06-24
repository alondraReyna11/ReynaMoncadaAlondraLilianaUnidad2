<?php 
require_once 'cnn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recuperar</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon" />

    <!-- Font Awesome -->
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
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
<!-- Carousel wrapper -->
</head>
<body>
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
      <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
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

      <!-- Notifications -->
      <div class="dropdown">
        <a
          class="link-secondary me-3 dropdown-toggle hidden-arrow"
          href="login.php"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
        <i class="fas fa-user-gear"></i>        
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-itemr" href="login.php">Iniciar Sesión</a>
          </li>
          <li>
            <a class="dropdown-item" href="registro.php">Registrarse</a>
          </li>
        </ul>
      </div>
      
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<body>
    <br>
    <br><br>
    <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('img/candado.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Restablecer contraseña</h2>
          <div class="form-outline mb-4">
    <form action="recuperar_cuenta.php" method="POST">
        <label  class="form-label" for="form3Example3">Correo</label>
        <input type="email" id="correo" name="correo" required>
        
        <input type="submit" class="btn btn-primary btn-block mb-1" value="Restablecer">   

		</form>
            <!-- Email input -->
         
           
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
  </div>
  <div class="col-md-2"></div>
</div>

    </body>
    <!-- Footer -->
<br>
<br>
    
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
