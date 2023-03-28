<?php require_once '../conexion.php';
$con = conectar();

$id = $_POST["id"];
$fecha_solicitud = date('Y-m-d');
$descripcion = $_POST["descripcion"];
$solicitud_material = $_POST["solicitud_material"];
$solicitud = $_POST["solicitud"];
$tipo_mantenimiento = $_POST["tipo_mantenimiento"];

$actualizar_soli = "UPDATE `orden` SET `fecha_solicitud`='$fecha_solicitud',`descripcion`='$descripcion',`solicitud_material`='$solicitud_material',`solicitud`='$solicitud',`tipo_mantenimiento`='$tipo_mantenimiento' WHERE id = $id";
$resultado = mysqli_query($con, $actualizar_soli);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}





