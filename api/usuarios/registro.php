<?php 
$conexion = include "../../include/conexion.php";

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$numero = $_POST["numero"];
$password = $_POST["password"];
$rol = $_POST["rol"];

$sql = "INSERT INTO usuarios (nombre, email, password, numero, rol) VALUES ('$nombre', '$email','$password','$numero', '$rol')";

$resultado = mysqli_query($conexion, $sql);
if ($resultado) {
    echo json_encode(array("error" => 0));
} else {
    echo json_encode(array("error" => 1));
}
?>