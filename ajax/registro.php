<?php
require_once '../conexion.php';
$con = conectar();

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];

$date = date('Y-m-d H:i:s');
$registro = "INSERT INTO usuario (`created`, `nombre`, `correo`, `clave`) VALUES ('$date', '$nombre', '$correo', '$clave')";

$resultado = mysqli_query($con, $registro);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
