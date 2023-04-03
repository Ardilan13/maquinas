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
$vigencia = date('Y-m-d');
$lugar_origen = date('Y-m-d'); 
$datos_proveedor = $_POST["datos_proveedor"];
$uso_diario = $_POST["uso_diario"];
$temperatura = $_POST["temperatura"];
$tiempo_carga = $_POST["tiempo_carga"];
$nivel_ruido = $_POST["nivel_ruido"];
$personal = $_POST["personal"]?? null;
$tipo = $_POST["tipo"]?? null;
$periodicidad = $_POST["periodicidad"]?? null;
$descripcion = $_POST["descripcion"];

$actualizar_act = "UPDATE `maquina` SET `codigo`='$codigo',`nombre`='$nombre',`marca`='$marca',`modelo`='$modelo',`ubicacion`='$ubicacion',`serial`='$serial',`voltaje`='$voltaje',`vigencia`='$vigencia',`lugar_origen`='$lugar_origen',`datos_proveedor`='$datos_proveedor',`uso_diario`='$uso_diario',`temperatura`='$temperatura',`tiempo_carga`='$tiempo_carga',`personal`='$personal',`tipo`='$tipo',`periodicidad`='$periodicidad',`descripcion`='$descripcion' WHERE id = $id";
$resultado = mysqli_query($con, $actualizar_act);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}