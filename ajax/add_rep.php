<?php
require_once '../conexion.php';
$con = conectar();

$nombre = $_POST["nombre"];
$valor = $_POST["valor"];

$registro = "INSERT INTO repuesto (nombre, valor) VALUES ('$nombre', '$valor')";

$resultado = mysqli_query($con, $registro);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
