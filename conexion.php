<?php

function conectar()
{
    $usuario = "ardilan";
    $contra = "transformice13";
    $ip = "localhost";
    $bd = "Control_Maquinas";

    $conexion = new mysqli($ip, $usuario, $contra, $bd);

    if ($conexion->connect_errno) {
        return "Error en la conexion";
    } else {
        return $conexion;
    }
}
