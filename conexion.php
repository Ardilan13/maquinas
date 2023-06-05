<?php

function conectar()
{
    $usuario = "root";
    $contra = "";
    $ip = "localhost";
    $bd = "control_maquinas";
    $port = "3306";

    $conexion = new mysqli($ip, $usuario, $contra, $bd, $port);

    if ($conexion->connect_errno) {
        return "Error en la conexion.";
    } else {
        return $conexion;
    }
}
