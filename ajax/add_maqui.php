<?php
require_once '../conexion.php';
$con = conectar();

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



$registro = "INSERT INTO maquina (codigo, nombre, marca, modelo, ubicacion, serial, voltaje, vigencia, lugar_origen, datos_proveedor, uso_diario,
temperatura, tiempo_carga, nivel_ruido, personal, tipo, periodicidad, descripcion, imagen) VALUES ('$codigo', '$nombre', '$marca', '$modelo', '$ubicacion', '$serial',
'$voltaje', '$vigencia', '$lugar_origen', '$datos_proveedor', '$uso_diario', '$temperatura', '$tiempo_carga', '$nivel_ruido', '$personal', '$tipo', '$periodicidad', '$descripcion', $'imagen')";


$resultado = mysqli_query($con, $registro);
if ($resultado) {
    echo 1;
} else {
    echo 0;
}
