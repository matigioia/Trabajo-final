<?php include "include/init.php";?>
<!DOCTYPE html> 
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="assets\CSS\stylepanel.css">
      <link rel="stylesheet" type="text/css" href="assets\CSS\bootstrap.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js"></script>
      <style>@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&family=Raleway:ital,wght@1,500&family=Roboto+Mono:ital@1&display=swap');</style>
      <?include "include/extensiones.php";?>
      <style>
        body{
          font-family: 'Playfair Display', serif;
          font-family: 'Raleway', sans-serif;
          font-family: 'Roboto Mono', monospace;
        }
      .row {
    background-image: url("utn-mdp.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 1000px;
  }
  .img1{
    padding-top: 30px;
    padding-bottom: 30px;
    
  }
  .img2{
      margin: auto;
      border: 5px solid #ddd;
      box-shadow: 5px 5px 5px #888888;
  }
  .utn{
    width:100%;
          margin: auto;
      border: 5px solid #ddd;
      box-shadow: 5px 5px 5px #888888;
  }
       </style>
    </head>
  <body>
    <img class="utn" src="assets\CSS\img\utn1.png">
    <div class="row">
      <div class="col-3">
    <?php include "include/menu.php";?>
</div>
<div class="col-9">
    <h1 class="mt-5 mb-4 display-1">INICIO</h1>
    <img class="img1" src="assets\CSS\img\Inicio.png">
    <img class="img2" src="assets\CSS\img\inicio4.png">
  
  </div>
</div>
<img class="col-12" src="assets\CSS\img\Contacto.png">
  </body>
</html>