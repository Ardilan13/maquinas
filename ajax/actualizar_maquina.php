<?php
require_once '../conexion.php';
$con = conectar();

$id = $_POST["id"];
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$ubicacion = $_POST["ubicacion"];
$serial = $_POST["serial"];
$voltaje = $_POST["voltaje"];
$vigencia = $_POST["vigencia"];
$lugar_origen = $_POST["lugar_origen"];
$datos_proveedor = $_POST["datos_proveedor"];
$uso_diario = $_POST["uso_diario"];
$temperatura = $_POST["temperatura"];
$tiempo_carga = $_POST["tiempo_carga"];
$nivel_ruido = $_POST["nivel_ruido"];
$personal = $_POST["personal"] ?? null;
$tipo = $_POST["tipo"] ?? null;
$periodicidad = $_POST["periodicidad"] ?? null;
$descripcion = $_POST["descripcion"];
$imagen = $_POST["imagen"];

// Actualizar la fecha de vigencia y lugar_origen
$actualizar_act = "UPDATE `maquina` SET `codigo`='$codigo',`nombre`='$nombre',`marca`='$marca',`modelo`='$modelo',`ubicacion`='$ubicacion',`serial`='$serial',`voltaje`='$voltaje',`vigencia`='$vigencia',`lugar_origen`='$lugar_origen',`datos_proveedor`='$datos_proveedor',`uso_diario`='$uso_diario',`temperatura`='$temperatura',`tiempo_carga`='$tiempo_carga',`nivel_ruido`='$nivel_ruido',`personal`='$personal',`tipo`='$tipo',`periodicidad`='$periodicidad',`descripcion`='$descripcion',`imagen`='$imagen' WHERE id = $id";
$resultado = mysqli_query($con, $actualizar_act);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
