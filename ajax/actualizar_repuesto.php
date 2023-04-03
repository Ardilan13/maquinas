<?php require_once '../conexion.php';
$con = conectar();

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$marca = $_POST["marca"];
$referencia = $_POST["referencia"];
$cantidad = $_POST["cantidad"];
$valor = $_POST["valor"];

$actualizar_soli = "UPDATE `repuesto` SET `nombre`='$nombre',`marca`='$marca',`referencia`='$referencia',`cantidad`='$cantidad',`valor`='$valor' WHERE id = $id";
$resultado = mysqli_query($con, $actualizar_soli);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}