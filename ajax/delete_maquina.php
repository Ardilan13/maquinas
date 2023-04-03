<?php
require_once '../conexion.php';
$con = conectar();

$id = $_GET["id"];

$delete_maq = "DELETE FROM maquina WHERE id = $id;";
$resultado = mysqli_query($con, $delete_maq);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}