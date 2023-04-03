<?php

function conectar()
{
    $usuario = "sebas";
    $contra = "sebas13";
    $ip = "localhost";
    $bd = "control_maquinas";
    $port = "3309";

    $conexion = new mysqli($ip, $usuario, $contra, $bd, $port);

    if ($conexion->connect_errno) {
        return "Error en la conexion.";
    } else {
        return $conexion;
    }
}
