<?php require_once '../conexion.php';
$con = conectar();

$id = $_POST["id"];
$activacion = $_POST["activacion"];
$proxima_activacion = $_POST["proxima_activacion"];


$actualizar =  "UPDATE `tarea` SET `activacion`='$activacion',`proxima_activacion`='$proxima_activacion' WHERE id = '$id'";
$resultado = mysqli_query($con, $actualizar);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}

