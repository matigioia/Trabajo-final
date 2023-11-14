<!DOCTYPE html>
<html>
    <head>
        <?include "include/extensiones.php";?>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="assets/CSS/bootstrap.min.css">
        <link rel="stylesheet" href="assets/CSS/style2.css">
        <title>login</title>
    </head>
    <body>
        <section class="vh-100">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 text-black">
          
                  <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0"><h1>INSCRIPCIÓN UTN</h1></span>
                    <h2>Universidad Tecnologica Nacional</h2>
                    </div>
          
                  <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-ns5">
          
                    <form style="width: 23rem;">
          
                      <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar Sesión</h3>
          
                      <div class="form-outline mb-4"> 
                        <label class="form-label">Email</label>
                        <input type="email" id="email" class="form-control form-control-lg" placeholder="Inserte su email" />
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label">Contraseña</label>
                        <input type="password" id="password" class="form-control form-control-lg" placeholder="Inserte su contraseña"/>
                      </div>
                      
                      <div class="pt-1 mb-4">
                        <button class="btn btn-danger btn-lg btn-block" type="button" onclick="enviar()" >Iniciar Sesión</button>
                      </div>
                      <div id="r"></div>
                      <p class="small mb-5 pb-lg-2"><a class="text-muted" href="contraseña.php">¿Olvido su contraseña?</a></p>
                      <p>¿Todavia no tenes tu cuenta?<a href="registrarse.php" class="link-info">Registrarse aqui</a></p>
                    </div>
                    </form>
                  </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                  <img src="assets\CSS\img\logo-utn.png" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
              </div>
            </div>
          </section>
        
    </body>
    <script>
          function enviar(){
                var email = $("#email").val();
                var password = $("#password").val();
                if(email == ""){
                  $("#r").html("Falta Email");
                    return;
                }
                if(password == ""){
                  $("#r").html("Falta Contraseña");
                    return;
                }
                $.ajax({
                  "url": "api/login.php",
                  "dataType" : "json" ,
                  "type" : "post",
                  "data" : {
                    "email": email,
                    "password": password,
                  },
                  "success":function(resultado) {
                    if(resultado.error == 0){
                      alert("Iniciaste sesion correctamente");
                      location.href = "panel.php";
                    } else {
                      alert("El usuario o contraseña que ingresaste son incorrectos");
                    }
                  }
                })
            }
        </script>
</html>