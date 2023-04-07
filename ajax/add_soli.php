<?php
require_once '../conexion.php';
$con = conectar();

$maquina = $_POST["maquina"];
$fecha_solicitud = $_POST["fecha_solicitud"];
$tipo_mantenimiento = $_POST["tipo_mantenimiento"] ?? null;
$descripcion = $_POST["descripcion"];
$solicitud_material = $_POST["solicitud_material"];
$solicitud = $_POST["solicitud"];

$registro = "INSERT INTO orden (id_maquina, fecha_solicitud, tipo_mantenimiento, descripcion, solicitud_material, solicitud,fecha_hora_inicio) VALUES ($maquina, '$fecha_solicitud', '$tipo_mantenimiento', 
'$descripcion', '$solicitud_material', '$solicitud', '$fecha_solicitud')";

$resultado = mysqli_query($con, $registro);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
