<?php
require_once '../conexion.php';
$con = conectar();

$maquina = $_POST["maquina"];
$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];

$registro = "INSERT INTO componente (id_maquina, nombre_componente, tipo) VALUES ($maquina, '$nombre', '$tipo')";

$resultado = mysqli_query($con, $registro);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}