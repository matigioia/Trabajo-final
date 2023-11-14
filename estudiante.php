<?php 
include "include/init.php";
if (isset($_GET["id"])) {
$id = $_GET["id"];
$conexion = include "include/conexion.php";

$sql = "SELECT * FROM usuarios WHERE id = '$id' ";
$query = mysqli_query($conexion, $sql);

if(mysqli_num_rows($query) == 0){
     header("Location: estudiantes.php");
};

$estudiante = mysqli_fetch_array($query);
} else { 
    $estudiante = array(
        "nombre" => "",
        "email" => "",
        "numero" => "",
        "password" => "",
    );
};
?>
<!DOCTYPE html> 
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="assets\CSS\stylepanel.css">
      <link rel="stylesheet" type="text/css" href="assets\CSS\bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js"></script>
      <?include "include/extensiones.php";?>
      <style>
h1{
    color:red;
}
h2{
    font-size: 100px;
}

button {
    height: 50px;
    width: auto;
    margin-left: 10px;
}

label{
    color: white;
    font-size: 30px;
    margin: 20px;
    text-align: center;
  }
  input{
  height:40px;
}
  select{
  height:40px;
}
h3{
    color:grey;
    margin-top:20px;
}
.row {
    background-image: url("utn-mdp.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 800px;
  }
.enviar{
height: 50px;
width: 30%;
margin-left: 30%;
}
</style>
    </head>
  <body>
    <div class="row">
      <div class="col-3">
    <?php include "include/menu.php";?>
</div>
<div class="col-9">
    <h1>Estudiante</h1>
        <div>
            <label >Nombre</label>
            <input type="text" id="nombre" value="<?php echo $estudiante["nombre"]?>">
        </div>
        <div>
            <label >Email</label>
            <input type="email" id="email" value="<?php echo $estudiante["email"]?>">
        </div>
        <div>
          <label >Numero de telefono</label>
            <input type="number" id="numero" value="<?php echo $estudiante["numero"]?>">
        </div>
        <div>
          <label >Contraseña</label>
            <input type="password" id="password" value="<?php echo $estudiante["password"]?>">
        </div>
  <label for="rol">Selecciona un rol:</label>
  <select name="rol" id="rol">
    <option value="0">Alumno</option>
    <option value="1">Profesor</option>
  </select>
        </div>
        <button onclick="guardar()" class="btn btn-primary enviar" type="button"> Guardar Usuario</button>
        <div id="r"></div>
      </div>
      </div>
      <?php
if (isset($estudiante) && isset($estudiante["id"])) {
    $id = $estudiante["id"];
} else {
    $id = "0";
}
?>
      <script>
        function guardar(){
            var nombre = $("#nombre").val();
            var email = $("#email").val();
            var numero = $("#numero").val();
            var password = $("#password").val();
            var rol = $("#rol").val();
            var id = <?php echo $id; ?>;
                if(nombre == ""){
              $("#r").html("Falta nombre");
                return;
            };
            if(email == ""){
                  $("#r").html("Falta Email");
                    return;
                };
                if(password == ""){
                  $("#r").html("Falta Contraseña");
                    return;
                };
                if(numero == ""){
                  $("#r").html("Falta numero");
                    return;
                };
                $.ajax({
                  "url":"api/usuarios/guardar.php",
                  "dataType":"json",
                  "type":"post",
                  "data":{
                    "id": id,
                    "nombre": nombre,
                    "email" : email,
                    "numero": numero,
                    "password": password,
                    "rol": rol,
                  },
                    "success": function(resultado){
                    if(resultado.error == 0){
                        location.href = "estudiantes.php";
                    } else{
                        alert("Hubo un error.");
                    }
                  }
                });    
        };
    </script>
  </body>
</html>