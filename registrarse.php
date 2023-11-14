<!DOCTYPE html>
<html>
    <head>
        <?include "include/extensiones.php";?>
        <link rel="stylesheet" type="text/css" href="assets\CSS\bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets\CSS\style2.css">
        <title>login</title>
    </head>
    <body>
        <section class="vh-100">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 text-black">
                  <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0"><H1>INSCRIPCIÓN UTN</h1></span>
                    <h2>Universidad Tecnologica Nacional</h2>
                    </div>
          
                  <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-ns5">
          
                    <form style="width: 23rem;">
          
                      <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Crear una cuenta</h3>
                      <div class="form-outline mb-4">
                        <label class="form-label">Nombre completo</label>
                        <input type="text" id="nombre" class="form-control form-control-lg" placeholder="Inserte su nombre completo"/>
                      </div>
                      <div class="form-outline mb-4"> 
                        <label class="form-label" >Email</label>
                        <input type="email" id="email" class="form-control form-control-lg" placeholder="Inserte su email" />
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" >Numero de telefono</label>
                        <input type="number" id="numero" class="form-control form-control-lg" placeholder="Inserte su numero de telefono"/>
                      </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" >Crea una contraseña</label>
                        <input type="password" id="password" class="form-control form-control-lg" placeholder="Inserte su nueva contraseña"/>
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" >Repita su nueva contraseña</label>
                        <input type="password" id="password2" class="form-control form-control-lg" placeholder="Inserte su nueva contraseña"/>
                      </div>
                      <select id="rol">
                        <option value="1">Alumno</option>
                        <option value="2">Profesor</option>
                      </select>
                      <div class="pt-1 mb-4">
        <button onclick="guardar()" class="btn btn-danger" type="button"> Guardar Usuario</button>
                    </div>
                      <div id="r"></div>
                    </form>
                  </div>
          
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                  <img src="assets\CSS\img\logo-utn.png"
                    alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
              </div>
            </div>
          </section>
<script>
        function guardar(){
            var nombre = $("#nombre").val();
            var email = $("#email").val();
            var numero = $("#numero").val();
            var password = $("#password").val();
            var password2 = $("#password2").val();
            var rol = $("#rol").val();
            if(nombre == ""){
              $("#r").html("Falta nombre");
                return;
            };
            if(email == ""){
                  $("#r").html("Falta Email");
                    return;
                };
                if(numero == ""){
                  $("#r").html("Falta numero");
                    return;
                };
                if(password == ""){
                  $("#r").html("Falta Contraseña");
                    return;
                };
                if(password2 == ""){
                    $("#r").html("Falta repetir la contraseña");
                    return;
                };
                if(password2 != password){
                    $("#r").html("Las contraseñas no coinciden");
                    return;
                };
                $.ajax({
                  "url":"api/usuarios/registro.php",
                  "dataType":"json",
                  "type":"post",
                  "data":{
                    "nombre": nombre,
                    "email" : email,
                    "numero": numero,
                    "password": password,
                    "rol" : rol,
                  },
                    "success": function(resultado){
                    if(resultado.error == 0){
                      alert("Tu usuario se creo correctamente.");
                        location.href = "index.php";
                    } else{
                        alert("Hubo un error.");
                    }
                  }
                });    
        };
    </script>
    </body>
</html>