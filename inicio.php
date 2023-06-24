<?php
session_start();
require_once 'cdn.html';
include 'cnn.php';


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <!-- Font Awesome -->
    <link rel="icon" href="img/logo.png" type="image/x-icon" />
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
<nav class="navbar fixed-top navbar-expand-lg bg-dark navbar-dark ">
  <!-- Container wrapper -->
  <div class="container-fluid">

    <!-- Navbar brand -->
    <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
        <img
          src="img/log.png"
          height="40"
          alt="MDB Logo"
          loading="lazy"
        />
        <a class="nav-link" href="index.php"></a>
      </a>
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <!-- Link -->
        <li class="nav-item">
          <a class="nav-link" href="inicio.php">YABtravel</a>
        </li>

      </ul>

      <!-- Icons -->
      <ul class="navbar-nav d-flex flex-row me-1">
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="inicio.php"><i class="fas fa-house"></i>INICIO</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="Galeria.php"><i class="fas fa-image"></i>GALERIA</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="contacto.php"><i class="fas fa-headset"></i>CONTACTO</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="preguntas.php"><i class="far fa-circle-question"></i></a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="logout.php"> SALIR<i class="fas fa-arrow-right-to-bracket"></i></a>
        </li>
      </ul>
     

    </div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<br>
<div class="row">
  <div class="col-md-2">
  <div class="container"> 
    <br> <br>
     <img src="img/pla.png" class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
</div>

  </div>
  <div class="col-md-8">
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <img src="img/cabos.jpg" class="d-block w-100" alt="Sunset Over the City"/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Conoce lo mejor</h5>
        <p>Viaja por todo México, a tu comodidad</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="img/cancun.jpg" class="d-block w-100" alt="Canyon at Nigh"/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Cancun</h5>
        <p>De las mejores playas</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="img/mazatlan.jpg" class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
      <div class="carousel-caption d-none d-md-block">
        <h5>mazatlan, Sinaloa</h5>
        <p>Las mejores fiestas</p>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper --></div>
  <div class="col-md-2">    
  <div class="container"> 
    <br> <br>
     <img src="img/donde.png" class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
</div>
  
</div>
</div>
<hr>
<div class="row">
  <div class="col-md-3">
  <img
        src="img/aero.jpg"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/1.webp"
        alt="Table Full of Spices"
        class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
      />
      <br>
      <img
        src="img/air.png"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/1.webp"
        alt="Table Full of Spices"
        class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
      />
      <img
        src="img/book.png"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/1.webp"
        alt="Table Full of Spices"
        class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
      />
      
      
  </div>
  <div class="col-md-6"><div class="lightbox">
  <div class="row">
    <div class="col-lg-6">
      <img
        src="img/hotel.png"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/1.webp"
        alt="Table Full of Spices"
        class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
      />
      
      <img
        src="img/sanm.png"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Square/1.webp"
        alt="Coconut with Strawberries"
        class="w-100 shadow-1-strong rounded"
      />
    </div>
    <div class="col-lg-6">
        <br><br>
      <img
        src="img/piramide.png"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Vertical/1.webp"
        alt="Dark Roast Iced Coffee"
        class="w-100 shadow-1-strong rounded"
      />
    </div>
  </div>
</div></div>

  <div class="col-md-3"><p class="lead">
  <h4 class="display-2"><strong>LOS MEJORES PRECIOS<strong></h4>
  <ul class="list-unstyled">
  <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>HOSPEDAJE</li>
  <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>LUGARES TURISTICOS</li>
  <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>LA MEJOR COMIDA</li>
  <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>LO TRADICIONAL</li>
</ul>
</p>
<p class="lead">
  Todo esto y mas en YAB travel Agencia de Viajes 
</p>
<h5 class="lead">
  Para mas información 
  <a href="bot.php">ingresar a nuestro chat de ayuda</a>
</h5>

</div>
</div>
</body>
<!-- Footer -->
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

