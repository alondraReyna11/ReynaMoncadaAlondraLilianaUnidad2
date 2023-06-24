<?php include 'cnn.php';
require_once 'cdn.html';
   ?>
<!DOCTYPE html>
<html>
<head>
  <title>YABtravels || viajes< </title>

   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>

    
    <!-- MDB icon -->
    <link rel="icon" href="img/logo.png" type="image/x-icon"/>
    
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
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- Custom styles -->
       <style type="text/css">

.sub-title{
font-size: 21px;
margin-bottom: 20px;
margin-top: 10px;
margin: -5px;
}
.title{
font-size:18px;
margin-bottom: 20px;
margin-top: 10px;
margin: -5px;

}
</style>
</head>
<?php
include 'cnn.php';


$busqueda = $_POST['busqueda'];

$query = "SELECT * FROM lugaresturisticoS WHERE municipio LIKE '%$busqueda%'";
$consulta = mysqli_query($con, $query);



if ($row = mysqli_fetch_array($consulta)) {
      # code...
  ?>

  
              <?php
              $query = $cnnPDO->prepare("SELECT * FROM lugaresturisticos WHERE municipio LIKE '%$busqueda%'");
              $query->execute(); 

              $columnas = 1;
              while($campo = $query->fetch())
              {
                if ($columnas > 1)
                {
                  $columnas = 1;
                  ?>
                </tr>

                  <tr>
                  <?php
                }
                else
                {
                  $columnas = $columnas + 1; 
                  ?>
                 
<center>
  <div class='card text-white mb-3 border-light mb-1'  style= "width:43rem;" style= 'background: black;'>
                      <div class='card-header' style= "background: #b3ae11
;"><h4 style="color:black; float:center;">YAB travels </h4>
                      </div>
                    
  <div class="row g-0 " style="  ">
    <div class="col-md-3">
        <img src="img/logo.png " style="  margin-top: 10px;" width="260px" height="360px">
    </div>



    <div class="col-sm-35 col-md-8 col-lg-15 col-xl-15">
      <div class="card-body">
        
        <p class="card-text">

  <p class="sub-title" style="color: darkgreen; margin-top: 10px; margin-left: -163px;">ESTADO:</p>
  <p class="title"style="color: black; "><?php echo $campo['estado']; ?></p>


  <p class="sub-title" style="color: darkgreen; margin-top: 10px; margin-left: -180px;">MUNICIPIO:</p>
  <p class="title"style="color: black;"> <?php echo $campo['municipio']; ?></p>


   <p class="sub-title" style="color: darkgreen;margin-top: 10px;  margin-left: -195px;">LUGAR:</p>
   <BR></BR>
   <p class="title"style="color: black;margin-top: -28px; margin-left: -8px;"><?php echo $campo['lugar_turistico']; ?></p>


    <p class="sub-title" style="color: darkgreen; margin-top: 10px; margin-left: 250px;margin-top: -30px; ">$</p>
    <p class="title"style="color: black;margin-top: -28px; margin-left: 365px;"><?php echo $campo['precio']; ?></p>

      </div>

    </div>
    <center>
     
<div class=' '>
  
<button onclick="location.href='https://web.whatsapp.com/'" class="btn btn-outline-lime bg-dark" data-mdb-ripple-color="dark">INFO</button>


</center>



                      
     
  </div>
</div>

                  <?php
                }
            
                }

              ?>
   
            
  <?php

}
?>


</body>
</html>


