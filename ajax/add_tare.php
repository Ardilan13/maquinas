<?php
require_once '../conexion.php';
$con = conectar();

$maquina = $_POST["maquina"];
$activacion = date('Y-m-d');
$proxima_activacion = date('Y-m-d');


$registro = "INSERT INTO tarea (id_maquina, activacion, proxima_activacion) VALUES ($maquina, '$activacion', '$proxima_activacion')";

$resultado = mysqli_query($con, $registro);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
