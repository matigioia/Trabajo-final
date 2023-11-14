<?php 
$conexion = include "../../include/conexion.php";

$id = $_POST["id"];

$sql = " DELETE FROM usuarios WHERE id = $id ";

$resultado = mysqli_query($conexion, $sql);
$cantidadRegistro = mysqli_num_rows($resultado);
if ($cantidadRegistro == 0) {
    echo json_encode(array("error" => 0));
} else {
    echo json_encode(array("error" => 1));
}
?>