<?php
require_once '../conexion.php';
$con = conectar();

$id = $_GET["id"];


$delete_rep = "DELETE FROM `tarea` WHERE id=$id";
$resultado = mysqli_query($con, $delete_rep);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
