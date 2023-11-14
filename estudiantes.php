<?php include "include/init.php";?>
<!DOCTYPE html> 
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="assets\CSS\stylepanel.css">
      <link rel="stylesheet" type="text/css" href="assets\CSS\bootstrap.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js"></script>
      <?include "include/extensiones.php";?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <style>
        .principal {
    background-image: url("utn-mdp.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height:auto;
  }
  input[type=text] {
  width: 50%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  height: 40px;
}
.table{
  margin-top: 20px;
}
      </style>
    </head>
  <body>
    <div class="row principal">
      <div class ="col-3">
    <?php include "include/menu.php";?>
</div>
<div class="col-9">
  <h1 class="mt-5 mb-4 display-1" >ESTUDIANTES</h1>
  <div class="row">
    <div class="col-6">
    <form method="POST">
      <input type="text"  id="buscar" name="filtro" placeholder="buscar..." value="<?php echo isset($_POST["filtro"]) ? $_POST["filtro"] : ""?>" />
      <button class="btn btn-outline-dark"><box-icon name='search-alt-2'></box-icon></button>
    </form>
</div>
<div class="col-6">
    <a href="estudiante.php" type="button" class="btn btn-success float-right ">Agregar un nuevo estudiante</a>
</div>
    <table class="table">
        <thead class="table-dark ">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Numero</th>
             <?php if($_SESSION["rol"] == 1) { ?>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                   <?php } ?>
              </tr>
            </thead>
        <tbody>
          <?php
            $offset = 8;
            $page = 0; 
            $sql = "SELECT * FROM usuarios ";
            if(isset($_POST["filtro"]) && !empty($_POST)) {
              $filtro = $_POST["filtro"];
              $sql.= "WHERE nombre LIKE '%$filtro%'"; 
            }
            if(isset($_GET["page-link"])){
              $page = ($_GET["page-link"] - 1) * $offset;
              $sql .= " LIMIT $page, $offset";
            }
            $resultado = mysqli_query($conexion, $sql);
            while( $fila = mysqli_fetch_array($resultado)){ ?>
            <tr>
                <td><?php echo $fila["nombre"]?></td>
                <td><?php echo $fila["email"]?></td>
                <td><?php echo $fila["numero"]?></td>
            <?php
            if ($_SESSION["rol"] == 1) {
                ?>
                <td><a type="button" class="btn btn-outline-primary" href="estudiante.php?id=<?php echo $fila["id"] ?>"><box-icon type='solid' name='edit-alt'></box-icon></a></td>
                <td><a class="btn btn-outline-danger" href="javascript:void(0)" onclick="eliminar(<?php echo $fila['id'] ?>)"><box-icon name='x'></box-icon></a></td>
                <?php
            } else {
                if ($_SESSION["id"] == $fila["id"]) {
                    ?>
                    <td style="background-color: transparent;"><a type="button" class="btn btn-primary" href="estudiante.php?id=<?php echo $fila["id"] ?>" ><box-icon type='solid' name='edit-alt'></box-icon></a></td>
                    <?php
                }
            }
            ?>

              </tr>
              <?php } ?>
            </tbody>
          </table>
<?php include "include/paginacion.php"?>
    </div>
    </div>
    <img class="col-12" src="assets\CSS\img\Contacto.png">
  </body>
   <script>
    function eliminar(id){
      if(!confirm("¿Realmente desea eliminar este usuario?")) return; 
      $.ajax({
                  "url":"api/usuarios/eliminar.php",
                  "dataType":"json" ,
                  "type":"post",
                  "data":{
                    "id": id, 
                  },
                  "success":function(resultado) {
                    if(resultado.error == 0){
                      location.reload();
                    } else{
                      alert("error al eliminar el estudiante");
                    }
                  }
                })
        }; 
    </script>
</html>