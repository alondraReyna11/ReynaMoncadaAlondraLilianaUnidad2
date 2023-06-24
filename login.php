<?php 
session_start();
# CDN de MDB 4.19.0
require_once 'cdn.html';
require_once 'cnn.php';
?>
<html>
	<head>
		<title>Google Recapcha</title>
		<!-- CDN  MDB 4.19.1 -->

<!-- CSS -->
<link rel="icon" href="img/logo.png" type="image/x-icon" />

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<!-- JavaScript -->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		
	</head>
	<body style="background-image: url('summer.png'); background-repeat: no-repeat; background-size: cover;">
	
<!-- Image and text -->
<nav class="navbar  fixed-top  navbar-expand-lg navbar-dark" style="
            background: hsla(0, 0%, 10%, 0.55);
            backdrop-filter: blur(10px);
            ">
  <a class="navbar-brand" href="index.php">
    <img src="img/log.png" height="30" class="d-inline-block align-top"
      alt="mdb logo"> Yap
  </a>
  
</nav>

<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>
  <hr>
   <br>
  <!-- Jumbotron -->
  <div class="container py-2">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
     
          <div class="card-body p-5 shadow-5 text-center">
            <h3 class="fw-bold mb-3">Inicia sesión</h2>
            <form id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    
        <?php
	
	if(!empty($_POST)){
		
		$correoElectronico = $_POST['correoElectronico'];
		$contrasena = $_POST['contrasena'];
		$captcha = $_POST['g-recaptcha-response'];
		
		$secret = '6LeMB9QaAAAAAOS7WD18S24-PewEudf69m4_2UAB';
		
		if(!$captcha){
			 ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Por favor verifica el captcha</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <?php 

			//echo "Por favor verifica el captcha";
			
			} else {
			
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
			
			$arr = json_decode($response, TRUE);
			
			if($arr['success'])
			{
			if (isset($_POST['login']))
          {
            $correoElectronico=$_POST['correoElectronico'];
            $contrasena=$_POST['contrasena'];
            
            $query = $cnnPDO->prepare('SELECT * from login  WHERE correoElectronico =:correoElectronico AND contrasena  = :contrasena' );
            $query->bindParam(':correoElectronico', $correoElectronico );
            $query->bindParam(':contrasena', $contrasena );
            $query->execute(); 
            $count=$query->rowCount();
            $campo = $query->fetch();

            if($count)  
            {           
             
              header("location:inicio.php");  
            } 
            else 
            {
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Datos incorrectos</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <?php 
            }

          }

				} else {


				echo '<h3>Error al comprobar Captcha </h3>';
			}
		}
	}
?>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" name="correoElectronico" />
                <label class="form-label" for="form3Example3">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="contrasena"/>
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
              <div class="g-recaptcha" data-sitekey="6LeMB9QaAAAAAJHaq4jzpeO-6yLSuNWQ6ZX8wETA"></div>

              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4"  name="login" value="login">
              Iniciar Sesión
              </button>
              <label class="form-check-label" for="form2Example3">
                
                      <a href="recuperar.php"> Olvide contraseña</a>
                      <br>
                       <a href="registro.php">Registrame</a>
                    </label>
              <!-- Register buttons -->
              
            </form>
            <!-- Button trigger modal -->

          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-5 mb-lg-0">
        <img src="img/viaje.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>

</body>

</html>

