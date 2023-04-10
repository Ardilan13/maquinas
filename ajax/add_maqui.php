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

$estructura = "../build/img/maquinas/" . $codigo;
if (!mkdir($estructura, 0755, true)) {
    echo "Error al crear el directorio";
}

if (isset($_FILES["imagen"]["name"]) && $_FILES["imagen"]["name"] != "") {
    $imagen = $_FILES["imagen"]["name"];
    $imagen_temporal = $_FILES["imagen"]["tmp_name"];
    $ruta_imagen = $estructura . '/' . $imagen;
    move_uploaded_file($imagen_temporal, $ruta_imagen);
} else {
    $ruta_imagen = null;
}

if (isset($_FILES["qr"]["name"]) && $_FILES["qr"]["name"] != "") {
    $qr = $_FILES["qr"]["name"];
    $qr_temporal = $_FILES["qr"]["tmp_name"];
    $ruta_qr = $estructura . '/' . $qr;
    move_uploaded_file($qr_temporal, $ruta_qr);
} else {
    $ruta_qr = null;
}

if (isset($_FILES["manual"]["name"]) && $_FILES["manual"]["name"] != "") {
    $manual = $_FILES["manual"]["name"];
    $manual_temporal = $_FILES["manual"]["tmp_name"];
    $ruta_manual = $estructura . '/' . $manual;
    move_uploaded_file($manual_temporal, $ruta_manual);
} else {
    $ruta_manual = null;
}

if (isset($_FILES["hoja"]["name"]) && $_FILES["hoja"]["name"] != "") {
    $hoja = $_FILES["hoja"]["name"];
    $hoja_temporal = $_FILES["hoja"]["tmp_name"];
    $ruta_hoja = $estructura . '/' . $hoja;
    move_uploaded_file($hoja_temporal, $ruta_hoja);
} else {
    $ruta_hoja = null;
}

$registro = "INSERT INTO maquina (codigo, nombre, marca, modelo, ubicacion, serial, voltaje, vigencia, lugar_origen, datos_proveedor, uso_diario,
temperatura, tiempo_carga, nivel_ruido, personal, tipo, periodicidad, descripcion, img,qr,manual,hoja) VALUES ('$codigo', '$nombre', '$marca', '$modelo', '$ubicacion', '$serial',
'$voltaje', '$vigencia', '$lugar_origen', '$datos_proveedor', '$uso_diario', '$temperatura', '$tiempo_carga', '$nivel_ruido', '$personal', '$tipo', '$periodicidad', '$descripcion', '$ruta_imagen', '$ruta_qr', '$ruta_manual', '$ruta_hoja')";

$resultado = mysqli_query($con, $registro);
if ($resultado) {
    header("Location: ../mod_maquina.php");
} else {
    echo $registro;
}
