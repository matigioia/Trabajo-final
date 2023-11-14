<link rel="stylesheet" type="text/css" href="assets\CSS\stylepanel.css">
<style>@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&family=Raleway:ital,wght@1,500&family=Roboto+Mono:ital@1&display=swap');</style>
<link rel="stylesheet" type="text/css" href="assets\CSS\stylepanel.css">
    <div >
      <div class=" menu list-group" id="menu" >
        <box-icon name='menu' size="lg"></box-icon>
        <h2 class="m">Menú</h2>
        <ul>
          <li><a class="list-group-item list-group-item-action  list-group-item-primary" href="../panel.php">Inicio <box-icon name='home'></box-icon></a></li>
          <li><a class="list-group-item list-group-item-action  list-group-item-primary" href="../estudiantes.php">Estudiantes <box-icon name='group'></box-icon></a></li>
          <li><a class="list-group-item list-group-item-action  list-group-item-primary" href="./sedes.php">Estudiar en la UTN <box-icon type='solid' name='institution'></box-icon></a></li>
          <li><a class="list-group-item list-group-item-action  list-group-item-primary" href="../contacto.php">Contacto <box-icon name='message-rounded-dots'></box-icon></a></li>
          <li><a class="list-group-item list-group-item-action  list-group-item-primary" onclick="logout()" href="#">Cerrar sesion <box-icon name='exit' ></box-icon></a></li>
        </ul>
      </div>
    </div>
    <style>
body {
    font-family: 'Arial', sans-serif;
}

    h1 {
    font-family: 'Arial', sans-serif; 
    font-size: 80px;
    text-align: center;
    color: rgb(13,00,70);
    font-weight:700;
}

h2 {
    color: grey;
    font-size: 40px;
    text-align: center;
    padding-bottom: 20px;
}

h3 {
    color: white;
    margin-top: 20px;
}
    .m {
        color:black;
        font-size: 80px;
    }

    #menu {
        background-color: white ;
        font-size: 30px;
        font-weight: 700;
        color: rgb(255, 255, 255);
        height: 0px;
    }

    .contenido {
        color: black;
        overflow: hidden;
    }
            label{
                color: skyblue; 
                font-size: 40px;
                font-weight: bold;
            }
</style>
<script>
function logout() {
    if (confirm("¿Realmente deseas cerrar sesión?")) {
        window.location.href = "../api/logout.php";
    } else { 
      return;
    }
}
</script>