<?php require_once '../conexion.php';
$con = conectar();

$id = $_POST["id"];
$fecha_solicitud = $_POST["fecha_solicitud"];
$descripcion = $_POST["descripcion"];
$solicitud_material = $_POST["solicitud_material"];
$solicitud = $_POST["solicitud"];
$tipo_mantenimiento = $_POST["tipo_mantenimiento"];
$lugar_orden = $_POST["lugar_orden"];
$asignacion = $_POST["asignacion"];
$motivo = $_POST["motivo"];
$descripcion_trabajo = $_POST["descripcion_trabajo"];
$herramientas = $_POST["herramientas"];
$observaciones = $_POST["observaciones"];
$fecha_hora_inicio = $_POST["fecha_hora_inicio"];
$fecha_hora_fin = $_POST["fecha_hora_fin"];

$actualizar =  "UPDATE `orden` SET `fecha_solicitud`='$fecha_solicitud',`descripcion`='$descripcion',`solicitud_material`='$solicitud_material',`solicitud`='$solicitud',`tipo_mantenimiento`='$tipo_mantenimiento',`lugar_orden`='$lugar_orden',`asignacion`='$asignacion',`motivo`='$motivo',`descripcion_trabajo`='$descripcion_trabajo',`herramientas`='$herramientas',`observaciones`='$observaciones',`fecha_hora_inicio`='$fecha_hora_inicio',`fecha_hora_fin`='$fecha_hora_fin' WHERE id = '$id'";
$resultado = mysqli_query($con, $actualizar);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
