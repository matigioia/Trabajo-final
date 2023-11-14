<?php include "include/init.php";?>
<!DOCTYPE html> 
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="assets\CSS\bootstrap.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js"></script>
      <?include "include/extensiones.php";?>
      <style>
        
            .row {
                background-image: url("utn-mdp.png");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                height: 800px;
              }
            .enviar{
                margin-top: 25px;
                height: 50px;
                width: 30%;
                margin-left: 20%;
            }
            label{
                color: skyblue; 
                font-size: 40px;
                margin: 20px;
                text-align: center;
            }
            #email{
                height:30px;
                text-align:center;
                font-size:25px;
                width: 70%;
            }
            #consulta{
                height:30px;
                font-size:25px;
                text-align:center;
                width: 70%;
            }
  </style>
    </head>
  <body>
    <div class="row">
      <div class="col-3">
    <?php include "include/menu.php";?>
</div>
<div class="col-9 ">
    <h1 class="mt-5 mb-4 display-1">CONTACTO</h1>
    <h2> Si tenes alguna consulta, no dudes en comunicarte </h2>
    <h3> Dejanos tu consulta y te contactaremos por mail. </h3>
    <form>
        <label class="form-label">Email</label>
        <input type="email" id="email" class="form-control form-control-lg" placeholder="Inserte su email" />
        <label class="form-label" > Consulta</label>
        <input type="email" id="consulta" class="form-control form-control-lg" placeholder="Inserte su consulta" />
        <div class="d-grid gap-2">
  <button class="btn btn-primary enviar" onclick="enviar()" type="button">Enviar</button>
</div>
    </form>
</div>
</div>
</div>
<img class="col-12" src="assets\CSS\img\Contacto.png">
</body>
<script>
  function enviar(){
    alert("Tu consulta se realizo con exito. En un rato te responderemos por mail.")
  }
</script>
</html>