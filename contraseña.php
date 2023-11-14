<!DOCTYPE html>
<html>
    <head>
        <?include "include\extensiones.php";?>
        <link rel="stylesheet" type="text/css" href="assets\CSS\bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets\CSS\style2.css">
        <title>login</title>
        <script>
            function login() {
                var email = document.getElementById("email").value;
                var numero = document.getElementById("numero").value;
                if(email == ""){
                    document.getElementById("resultado").innerHTML ="Falta Email";
                    return;
                }
                if(numero == ""){
                    document.getElementById("resultado").innerHTML ="Falta Numero de telefono";
                    return;
                }
                alert("Revisa el mensaje en el numero de telefono y/o email. Acepte si es usted, y reescriba la nueva contraseña.");
                location.href = "index.php";
            }
            </script>
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
          
                      <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Recupere su contraseña</h3>
          
                      <div class="form-outline mb-4"> 
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" class="form-control form-control-lg" placeholder="Inserte su email" />
                      </div>
          
                      <div class="form-outline mb-4">
                        <label class="form-label" for="numero">Numero de telefono</label>
                        <input type="number" id="numero" class="form-control form-control-lg" placeholder="Inserte su número de telefono"/>
                      </div>
          
                      <div class="pt-1 mb-4">
                        <button class="btn btn-danger btn-lg btn-block" type="button" onclick="login()">Enviar</button>
                      </div>
                      <div id="resultado"></div>
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
    </body>
</html>