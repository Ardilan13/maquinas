<?php
require_once '../conexion.php';
$con = conectar();

$correo = $_POST["correo"];
$clave = $_POST["clave"];

$login = "SELECT * from usuario WHERE correo = '$correo' AND clave = '$clave';";

$resultado = mysqli_query($con, $login);
if ($resultado->num_rows == 1) {
    session_start();
    while ($row = mysqli_fetch_assoc($resultado)) {
        $_SESSION["id"] = $row["id"];
        $_SESSION["nombre"] = $row["nombre"];
    }
    echo 1;
} else {
    echo 0;
}
