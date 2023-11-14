<?php 
$conexion = include "../../include/conexion.php";

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$numero = $_POST["numero"];
$password = $_POST["password"];
$id = $_POST["id"];
$rol = $_POST["rol"];


if($id == 0){
    $sql = "INSERT INTO usuarios (nombre, email, password, numero, rol) VALUES ('$nombre', '$email','$password','$numero', '$rol')";
}else {
    $sql = "UPDATE usuarios SET nombre = '$nombre', email = '$email', password = '$password', numero = '$numero', rol = '$rol' WHERE id = '$id'";

}

$resultado = mysqli_query($conexion, $sql);
if ($resultado) {
    echo json_encode(array("error" => 0));
} else {
    echo json_encode(array("error" => 1));
}
?>