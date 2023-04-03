<?php require_once '../conexion.php';
$con = conectar();

$id = $_POST["id"];
$nombre_componente = $_POST["nombre_componente"];
$marca = $_POST["marca"];
$referencia = $_POST["referencia"];

$actualizar_soli = "UPDATE `componente` SET `nombre_componente`='$nombre_componente',`marca`='$marca',`referencia`='$referencia' WHERE id = $id";
$resultado = mysqli_query($con, $actualizar_soli);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}