<?php require_once '../conexion.php';
$con = conectar();

$id = $_POST["id"];
$descripcion = $_POST["descripcion"];
$solicitud_material = $_POST["solicitud_material"];
$solicitud = $_POST["solicitud"];
$tipo_mantenimiento = $_POST["tipo_mantenimiento"] ?? null;
$lugar_orden = $_POST["lugar_orden"];
$asignacion = $_POST["asignacion"];
$motivo = $_POST["motivo"];
$descripcion_trabajo = $_POST["descripcion_trabajo"];
$herramientas = $_POST["herramientas"];
$observaciones = $_POST["observaciones"];
$fecha_hora_inicio = $_POST["fecha_hora_inicio"];
$estado = $_POST["estado"] ?? null;
if ($estado == "cerrado") {
    $fecha_hora_fin = $_POST["fecha_hora_fin"];
} else {
    $fecha_hora_fin = null;
}


$actualizar =  "UPDATE `orden` SET `descripcion`='$descripcion',`solicitud_material`='$solicitud_material',`solicitud`='$solicitud',`tipo_mantenimiento`='$tipo_mantenimiento',`lugar_orden`='$lugar_orden',`asignacion`='$asignacion',`motivo`='$motivo',`descripcion_trabajo`='$descripcion_trabajo',`herramientas`='$herramientas',`observaciones`='$observaciones',`fecha_hora_inicio`='$fecha_hora_inicio',`fecha_hora_fin`='$fecha_hora_fin',`estado`='$estado' WHERE id = '$id'";
$resultado = mysqli_query($con, $actualizar);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
