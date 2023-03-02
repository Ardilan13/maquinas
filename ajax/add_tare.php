<?php
require_once '../conexion.php';
$con = conectar();

$maquina = $_POST["maquina"];
$activacion = date('Y-m-d');
$periodicidad = $_POST["periodicidad"]?? null;
$descripcion = $_POST["descripcion"];
$solicitud_material = $_POST["solicitud_material"];
$solicitud = $_POST["solicitud"];

$registro = "INSERT INTO orden (id_maquina, fecha_solicitud, tipo_mantenimiento, descripcion, solicitud_material, solicitud) VALUES ($maquina, '$fecha_solicitud', '$tipo_mantenimiento', 
'$descripcion', '$solicitud_material', '$solicitud')";

$resultado = mysqli_query($con, $registro);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
