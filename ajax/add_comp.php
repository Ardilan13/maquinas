<?php
require_once '../conexion.php';
$con = conectar();

$maquina = $_POST["maquina"];
$nombre = $_POST["nombre"];
$marca = $_POST["marca"];
$referencia = $_POST["referencia"];

$registro = "INSERT INTO componente (id_maquina, nombre_componente, marca, referencia) VALUES ($maquina, '$nombre', '$marca', '$referencia' )";

$resultado = mysqli_query($con, $registro);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
