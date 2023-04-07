<?php require_once '../conexion.php';
$con = conectar();

$id = $_POST["id"];
$fecha_solicitud = $_POST["fecha_solicitud"];
$descripcion = $_POST["descripcion"];
$solicitud_material = $_POST["solicitud_material"];
$solicitud = $_POST["solicitud"];
$tipo_mantenimiento = $_POST["tipo_mantenimiento"];

$actualizar =  "UPDATE `orden` SET `fecha_solicitud`='$fecha_solicitud',`fecha_hora_inicio`='$fecha_solicitud',`descripcion`='$descripcion',`solicitud_material`='$solicitud_material',`solicitud`='$solicitud',`tipo_mantenimiento`='$tipo_mantenimiento' WHERE id = '$id'";
$resultado = mysqli_query($con, $actualizar);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
