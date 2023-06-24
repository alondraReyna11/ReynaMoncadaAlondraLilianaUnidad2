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
    <title>GALERIA</title>
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
<nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark ">
  <!-- Container wrapper -->
  <div class="container-fluid">

    <!-- Navbar brand -->
    <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
        <img
          src="img/logo.png"
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
<body>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10"><marquee><h1>BIENVENIDOS YABtravel </marquee></h1></div>
  <div class="col-md-1"></div>
</div>  
<hr>

<section style="background-color: #eee;">
  <div class="text-center container py-5">
    <h4 class="mt-4 mb-5"><strong>LOS MEJORES PRECIOS</strong></h4>

    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img src="img/real.png"
              class="w-100" />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                  <h5><span class="badge bg-primary ms-2">New</span></h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">Real de catorce</h5>
            </a>
            <a href="" class="text-reset">
              <p>Pueblo majico</p>
            </a>
            <h6 class="mb-3">Desde: $8000</h6>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img src="img/hua.png"
              class="w-100" />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                  <h5><span class="badge bg-success ms-2">Eco</span></h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">La Huasteca SL</h5>
            </a>
            <a href="" class="text-reset">
              <p>CASCADA</p>
            </a>
            <h6 class="mb-3">$14,999</h6>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
            <img src="img/hot.png"
              class="w-100" />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                  <h5><span class="badge bg-danger ms-2">-10%</span></h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">HOTEL 5 ESTRELLAS</h5>
            </a>
            <a href="" class="text-reset">
              <p>Hospedaje</p>
            </a>
            <h6 class="mb-3">
              <s>$30,000</s><strong class="ms-2 text-danger">$25,000</strong>
            </h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
            <img src="img/me.png"
              class="w-100" />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                  <h5>
                    <span class="badge bg-success ms-2">Turistico</span><span
                      class="badge bg-danger ms-2">-10%</span>
                  </h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">Product name</h5>
            </a>
            <a href="" class="text-reset">
              <p>Category</p>
            </a>
            <h6 class="mb-3">
              <s>$20,000</s><strong class="ms-2 text-danger">$15,000</strong>
            </h6>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img src="img/aca.png"
              class="w-100" />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100"></div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">ACAPULCO</h5>
            </a>
            <a href="" class="text-reset">
              <p>Playa</p>
            </a>
            <h6 class="mb-3">$50,000</h6>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
            <img src="img/chi.png"
              class="w-100" />
            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100">
                  <h5>
                    <span class="badge bg-primary ms-2">New</span><span
                      class="badge bg-success ms-2">Eco</span><span class="badge bg-danger ms-2">-50%</span>
                  </h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <h5 class="card-title mb-3">CHICHEN ITZA</h5>
            </a>
            <a href="" class="text-reset">
              <p>Arqueologico</p>
            </a>
            <h6 class="mb-3">
              <s>$25,000</s><strong class="ms-2 text-danger">$12,000</strong>
            </h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="btn btn-primary" style="background-color: #ac2bac" href="viajes.php" role="button">BUSCAR MAS</a>

</section>
</body>
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
