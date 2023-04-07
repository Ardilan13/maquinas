<?php require_once 'includes/header.php';
require_once 'conexion.php';
$con = conectar();
$id = isset($_GET["id"]) ? intval($_GET["id"]) : null; // Validar y obtener un entero

if ($id != null) {
    $registro = "SELECT * from maquina where id=?";
    $stmt = mysqli_prepare($con, $registro);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($resultado);


    $codigo = $row['codigo'];
    $nombre = $row['nombre'];
    $marca = $row['marca'];
    $modelo = $row['modelo'];
    $ubicacion = $row['ubicacion'];
    $serial = $row['serial'];
    $voltaje = $row['voltaje'];
    $vigencia = $row['vigencia'];
    $lugar_origen = $row['lugar_origen'];
    $datos_proveedor = $row['datos_proveedor'];
    $uso_diario = $row['uso_diario'];
    $temperatura = $row['temperatura'];
    $tiempo_carga = $row['tiempo_carga'];
    $nivel_ruido = $row['nivel_ruido'];
    $personal = $row['personal'];
    $tipo = $row['tipo'];
    $periodicidad = $row['periodicidad'];
    $descripcion = $row['descripcion'];
    $imagen = $row['imagen'];
} else {
    $codigo = '';
    $nombre = '';
    $marca = '';
    $modelo = '';
    $ubicacion = '';
    $serial = '';
    $voltaje = '';
    $vigencia = '';
    $lugar_origen = '';
    $datos_proveedor = '';
    $uso_diario = '';
    $temperatura = '';
    $tiempo_carga = '';
    $nivel_ruido = '';
    $personal = '';
    $tipo = '';
    $periodicidad = '';
    $descripcion = '';
    $imagen = '';
}


?>

<main>
    <div class="container">
        <div class="header">
            <p>Consultar Activo</p>
        </div>
        <div class="info">
            <form method="POST" enctype="multipart/form-data" id="agregar_maqn">
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                <p>Especificaciones Tecnicas del Equipo</p>

                <div class="flex">
                    <div class="input">
                        <label for="codigo">Codigo:</label>
                        <input type="text" id="codigo" name="codigo" value="<?php echo $codigo; ?>">
                    </div>
                    <div class="input">
                        <label for="imagen">Imagen:</label>
                        <input type="file" id="imagen" name="imagen" value="<?php echo $imagen; ?>">
                    </div>
                    <div class="input">
                        <label for="serial">Serial:</label>
                        <input type="text" id="serial" name="serial" value="<?php echo $serial; ?>">
                    </div>

                    <div class="input">
                        <label for="voltaje">Voltaje:</label>
                        <input type="text" id="voltaje" name="voltaje" value="<?php echo $voltaje; ?>">
                    </div>
                    <div class="input">
                        <label for="datos_proveedor">Datos del Proveedor:</label>
                        <input type="text" id="datos_proveedor" name="datos_proveedor" value="<?php echo $datos_proveedor; ?>">
                    </div>
                    <div class="input">
                        <label for="ubicacion">Numero de Inventario:</label>
                        <input type="text" id="ubicacion" name="ubicacion" value="<?php echo $ubicacion; ?>">
                    </div>
                    <div class="input">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
                    </div>
                    <div class="input">
                        <label for="marca">Marca:</label>
                        <input type="text" id="marca" name="marca" value="<?php echo $marca; ?>">
                    </div>
                    <div class="input">
                        <label for="vigencia">Vigente desde(YYYY-MM-DD):</label>
                        <input type="date" id="vigencia" name="vigencia" value="<?php echo $vigencia; ?>">
                    </div>
                    <div class="input">
                        <label for="modelo">Modelo:</label>
                        <input type="text" id="modelo" name="modelo" value="<?php echo $modelo; ?>">
                    </div>
                </div>

                <p id="p_issue">Condiciones de Operacion</p>

                <div class="flex">
                    <div class="input">
                        <label for="uso_diario">Horas de Uso Diario:</label>
                        <input type="text" id="uso_diario" name="uso_diario" value="<?php echo $uso_diario; ?>">
                    </div>
                    <div class="input">
                        <label for="temperatura">Temperatura de operación (°C):</label>
                        <input type="text" id="temperatura" name="temperatura" value="<?php echo $temperatura; ?>">
                    </div>
                    <div class="input">
                        <label for="datos_proveedor">Datos del Proveedor:</label>
                        <input type="text" id="datos_proveedor" name="datos_proveedor" value="<?php echo $datos_proveedor; ?>">
                    </div>
                    <div class="input">
                        <label for="nivel_ruido">Nivel de Ruido:</label>
                        <input type="text" id="nivel_ruido" name="nivel_ruido" value="<?php echo $nivel_ruido; ?>">
                    </div>
                    <div class="input">
                        <label for="tiempo_carga">Indicadores de desempeño:</label>
                        <input type="text" id="tiempo_carga" name="tiempo_carga" value="<?php echo $tiempo_carga; ?>">
                    </div>
                    <div class="input">
                        <label for="lugar_origen">Fecha de Operacion:</label>
                        <input type="date" id="lugar_origen" name="lugar_origen" value="<?php echo $lugar_origen; ?>">
                    </div>
                </div>
                <p>Mantenimiento</p>
                <div class="grid">
                    <div class="input input_radio">
                        <label for="personal">Personal:</label>
                        <div class="radios">
                            <input type="radio" name="personal" value="interno" <?php if ($personal == 'interno') echo 'checked'; ?>>
                            <label for="personal">Interno</label>
                            <input type="radio" name="personal" value="externo" <?php if ($personal == 'externo') echo 'checked'; ?>>

                            <label for="personal">Externo</label>
                        </div>
                    </div>
                    <div class="input input_radio">
                        <div>
                            <label for="periodo">Periodicidad:</label>
                        </div>
                        <div class="radios">
                            <input type="radio" name="periodicidad" value="mensual" <?php if ($periodicidad == 'mensual') echo 'checked'; ?>>
                            <label for="periodicidad">Mensual</label>

                            <input type="radio" name="periodicidad" value="trimestral" <?php if ($periodicidad == 'trimestral') echo 'checked'; ?>>
                            <label for="periodicidad">Trimestral</label>

                            <input type="radio" name="periodicidad" value="semestral" <?php if ($periodicidad == 'semestral') echo 'checked'; ?>>
                            <label for="periodicidad">Semestral</label>

                            <input type="radio" name="periodicidad" value="anual" <?php if ($periodicidad == 'anual') echo 'checked'; ?>>
                            <label for="periodicidad">Anual</label>
                        </div>
                    </div>
                    <div class="input input_radio">
                        <div>
                            <label for="tipo">Tipo:</label>
                        </div>
                        <div class="radios">
                            <input type="radio" name="tipo" value="correctivo" <?php if ($tipo == 'correctivo') echo 'checked'; ?>>
                            <label for="tipo">Correctivo</label>
                            <input type="radio" name="tipo" value="preventivo" <?php if ($tipo == 'preventivo') echo 'checked'; ?>>
                            <label for="tipo">Preventivo</label>
                        </div>
                    </div>
                </div>
                <div class="input">
                    <label for="descripcion">Descripcion del Mantenimiento:</label>
                    <input type="text" id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>">
                </div>
                <button id="regresar_maqn">Volver</button>
                <?php if ($id == null) { ?>
                    <button id="btn_creacion_maqn">Agregar Activo</button>
                <?php } else { ?>
                    <button id="actualizar_maq">Actualizar</button>
                <?php }  ?>

            </form>
        </div>
    </div>

</main>

<?php require_once 'includes/footer.php'; ?>