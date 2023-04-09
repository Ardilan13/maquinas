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
$estructura = "../build/img/maquinas/" . $codigo;
if (!mkdir($estructura, 0777, true)) {
    echo "Error al crear el directorio";
}

if (isset($_FILES["imagen"]["name"])) {
    $imagen = $_FILES["imagen"]["name"];
    $imagen_temporal = $_FILES["imagen"]["tmp_name"];
    $ruta_imagen = $estructura . '/' . $imagen;
    move_uploaded_file($imagen_temporal, $ruta_imagen);
} else {
    $ruta_imagen = $_POST["imagen"];
}

if (isset($_FILES["qr"]["name"])) {
    $qr = $_FILES["qr"]["name"];
    $qr_temporal = $_FILES["qr"]["tmp_name"];
    $ruta_qr = $estructura . '/' . $qr;
    move_uploaded_file($qr_temporal, $ruta_qr);
} else {
    $ruta_qr = $_POST["qr"];
}

if (isset($_FILES["manual"]["name"])) {
    $manual = $_FILES["manual"]["name"];
    $manual_temporal = $_FILES["manual"]["tmp_name"];
    $ruta_manual = $estructura . '/' . $manual;
    move_uploaded_file($manual_temporal, $ruta_manual);
} else {
    $ruta_manual = $_POST["manual"];
}

if (isset($_FILES["hoja"]["name"])) {
    $hoja = $_FILES["hoja"]["name"];
    $hoja_temporal = $_FILES["hoja"]["tmp_name"];
    $ruta_hoja = $estructura . '/' . $hoja;
    move_uploaded_file($hoja_temporal, $ruta_hoja);
} else {
    $ruta_hoja = $_POST["hoja"];
}

// Actualizar la fecha de vigencia y lugar_origen
$actualizar_act = "UPDATE `maquina` SET `codigo`='$codigo',`nombre`='$nombre',`marca`='$marca',`modelo`='$modelo',`ubicacion`='$ubicacion',`serial`='$serial',`voltaje`='$voltaje',`vigencia`='$vigencia',`lugar_origen`='$lugar_origen',`datos_proveedor`='$datos_proveedor',`uso_diario`='$uso_diario',`temperatura`='$temperatura',`tiempo_carga`='$tiempo_carga',`nivel_ruido`='$nivel_ruido',`personal`='$personal',`tipo`='$tipo',`periodicidad`='$periodicidad',`descripcion`='$descripcion',`img`='$ruta_imagen',`qr`='$ruta_qr',`manual`='$ruta_manual',`hoja`='$ruta_hoja' WHERE id = $id";
$resultado = mysqli_query($con, $actualizar_act);
if ($resultado) {
    header('location: ../mod_maquina.php');
} else {
    echo 0;
}
