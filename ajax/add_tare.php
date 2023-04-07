<?php
require_once '../conexion.php';
$con = conectar();

$maquina = $_POST["maquina"];
$descripcion = $_POST["descripcion"];
$activacion = $_POST["activacion"];
$proxima_activacion = $_POST["proxima_activacion"];


$registro = "INSERT INTO tarea (id_maquina, activacion,descripcion, proxima_activacion) VALUES ($maquina, '$activacion','$descripcion', '$proxima_activacion')";

$resultado = mysqli_query($con, $registro);
if ($resultado) {
    $orden = "INSERT INTO orden (id_maquina,descripcion, fecha_hora_inicio) VALUES ($maquina,'$descripcion', '$proxima_activacion')";
    $resultado_o = mysqli_query($con, $orden);
    if ($resultado_o) {
        echo 1;
    } else {
        echo 0;
    }
} else {
    echo 0;
}
