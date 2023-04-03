<?php
require_once '../conexion.php';
$con = conectar();

$id = $_POST["id"];


$delete_prod = "DELETE FROM `repuesto` WHERE id='$id'";
$resultado = mysqli_query($con, $delete_prod);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
