<?php
require_once '../conexion.php';
$con = conectar();

$nombre = $_POST["nombre"];
$marca = $_POST["marca"];
$referencia = $_POST["referencia"];
$cantidad = $_POST["cantidad"];
$valor = $_POST["valor"];

$registro = "INSERT INTO repuesto (nombre, marca, referencia, cantidad, valor) VALUES ('$nombre', '$marca', '$referencia', '$cantidad', '$valor')";

$resultado = mysqli_query($con, $registro);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
