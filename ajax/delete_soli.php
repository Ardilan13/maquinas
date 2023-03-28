<?php
require_once '../conexion.php';
$con = conectar();

$id = $_GET["id"];

$delete_ord = "DELETE FROM orden WHERE id = $id;";
$resultado = mysqli_query($con, $delete_ord);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
