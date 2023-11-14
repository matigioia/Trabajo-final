<?php
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$conexion = include "../include/conexion.php";

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password' ";
$resultado = mysqli_query($conexion, $sql);
$cantidadRegistro = mysqli_num_rows($resultado);
if ($cantidadRegistro == 0) {
    echo json_encode(array(
        "error" => 1
    ));
}else {
    $res = mysqli_fetch_object($resultado);
    $_SESSION["email"] = $email;
    $_SESSION["rol"] = $res->rol;
        $_SESSION["id"] = $res->id;
    echo json_encode(array(
    "error" => 0

));    
}
?>
