<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js"></script>
    <?include "include/extensiones.php";?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .carousel-item img {
      max-width: 400px;
      max-height: 500px;
      margin: auto;
      border: 5px solid #ddd;
      box-shadow: 5px 5px 5px #888888;
    }
.row {
    background-image: url("utn-mdp.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: auto;
  }
  .carousel-inner{
    padding-bottom:30px;
  }
  </style>
</head>
<body>
    <div class="row">
      <div class="col-3">
    <?php include "include/menu.php";?>
</div>
<div class="col-9 ">
<div class="container">
        <h1 class="mt-5 mb-4 display-1">ESTUDIAR EN LA UTN</h1>
    <h3 style="text-align: center; font-size: 30px;"> Si todavia no tenes en claro donde vas a estudiar, te dejo algunas opciones de las sedes mas conocidas. </h3>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets\CSS\img\sede1.png" class="d-block w-100" alt="sede1">
      </div>
      <div class="carousel-item">
        <img src="assets\CSS\img\sede2.png" class="d-block w-100" alt="sede2">
      </div>
      <div class="carousel-item">
        <img src="assets\CSS\img\sede3.png" class="d-block w-100" alt="sede3">
      </div>
      <div class="carousel-item">
        <img src="assets\CSS\img\sede4.png" class="d-block w-100" alt="sede4">
      </div>
      <div class="carousel-item">
        <img src="assets\CSS\img\sede5.png" class="d-block w-100" alt="sede5">
      </div>
      <div class="carousel-item">
        <img src="assets\CSS\img\sede6.png" class="d-block w-100" alt="sede6">
      </div>
      <div class="carousel-item">
        <img src="assets\CSS\img\sede7.png" class="d-block w-100" alt="sede7">
      </div>
      <div class="carousel-item">
        <img src="assets\CSS\img\sede8.png" class="d-block w-100" alt="sede8">
      </div>
      <div class="carousel-item">
        <img src="assets\CSS\img\sede9.png" class="d-block w-100" alt="sede9">
      </div>
      <div class="carousel-item">
        <img src="assets\CSS\img\sede10.png" class="d-block w-100" alt="sede10">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</div>
</div>
<img class="col-12" src="assets\CSS\img\Contacto.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
