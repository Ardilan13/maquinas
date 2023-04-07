<?php require_once '../conexion.php';
$con = conectar();

$id = $_POST["id"];
$descripcion = $_POST["descripcion"];
$activacion = $_POST["activacion"];
$proxima_activacion = $_POST["proxima_activacion"];


$actualizar =  "UPDATE `tarea` SET `activacion`='$activacion',`proxima_activacion`='$proxima_activacion',descripcion='$descripcion' WHERE id = '$id'";
$resultado = mysqli_query($con, $actualizar);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
