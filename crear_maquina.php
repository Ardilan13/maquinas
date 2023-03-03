<?php require_once 'includes/header.php';
require_once 'conexion.php';
$con = conectar();
$id = $_GET["id"] ?? null;
if ($id != null) {
    $registro = "SELECT * from maquina where id=$id";
    $resultado = mysqli_query($con, $registro);
    $row = mysqli_fetch_assoc($resultado);
    $codigo = $row['codigo'];
    $nombre = $row['nombre'];
    $marca = $row['marca'];
    $modelo = $row['modelo'];
    $ubicacion = $row['ubicacion'];
    $serial = $row['serial'];
    $voltaje = $row['voltaje'];
    $vigencia = date('Y-m-d');
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
}


?>

<main>
    <div class="container">
        <div class="header">
            <p>Consultar Maquina</p>
        </div>
        <div class="info">

            <form id="agregar_maqn">
                <p>Especificaciones Tecnicas del Equipo</p>

                <div class="flex">
                    <div class="input">
                        <label for="codigo">Codigo:</label>
                        <input type="text" id="codigo" name="codigo" value="<?php echo $codigo; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                    <div class="input">
                        <label for="serial">Serial:</label>
                        <input type="text" id="serial" name="serial" value="<?php echo $serial; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>

                    <div class="input">
                        <label for="voltaje">Voltaje:</label>
                        <input type="text" id="voltaje" name="voltaje" value="<?php echo $voltaje; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                </div>
                <div class="flex">
                    <div class="input">
                        <label for="datos_proveedor">Datos del Proveedor:</label>
                        <input type="text" id="datos_proveedor" name="datos_proveedor" value="<?php echo $datos_proveedor; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>

                    <div class="input">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                </div>
                <div class="flex">
                    <div class="input">
                        <label for="marca">Marca:</label>
                        <input type="text" id="marca" name="marca" value="<?php echo $marca; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                    <div class="input">
                        <label for="vigencia">Vigente desde(YYYY-MM-DD):</label>
                        <input type="date" id="vigencia" name="vigencia" value="<?php echo $vigencia; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                </div>
                <div class="flex">
                    <div class="input">
                        <label for="modelo">Modelo:</label>
                        <input type="text" id="modelo" name="modelo" value="<?php echo $modelo; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                    <div class="input">
                        <label for="lugar_origen">Lugar_Origen:</label>
                        <input type="text" id="lugar_origen" name="lugar_origen" value="<?php echo $lugar_origen; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                </div>
                <div class="flex"></div>

                <p>Condiciones de Operacion</p>

                <div class="flex">
                    <div class="input">
                        <label for="uso_diario">Horas de Uso Diario:</label>
                        <input type="text" id="uso_diario" name="uso_diario" value="<?php echo $uso_diario; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                    <div class="input">
                        <label for="temperatura">Temperatura de operación:</label>
                        <input type="text" id="temperatura" name="temperatura" value="<?php echo $temperatura; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                    <div class="input">
                        <label for="tiempo_carga">Tiempo de carga:</label>
                        <input type="text" id="tiempo_carga" name="tiempo_carga" value="<?php echo $tiempo_carga; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                </div>
                <div class="flex">
                    <div class="input">
                        <label for="nivel_ruido">Nivel de Ruido:</label>
                        <input type="text" id="nivel_ruido" name="nivel_ruido" value="<?php echo $nivel_ruido; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                    <div class="input">
                        <label for="ubicacion">Ubicacion:</label>
                        <input type="text" id="ubicacion" name="ubicacion" value="<?php echo $ubicacion; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                </div>
                <p>Mantenimiento</p>
                <div class="flex">
                    <div class="input input_radio">
                        <label for="personal">Personal:</label>
                        <div class="radios">
                            <input type="radio" name="personal" value="interno" <?php if ($id != null) echo 'disabled ';
                                                                                if ($personal == 'interno') echo 'checked'; ?>>
                            <label for="personal">Interno</label>
                            <input type="radio" name="personal" value="externo" <?php if ($id != null) echo 'disabled ';
                                                                                if ($personal == 'externo') echo 'checked'; ?>>

                            <label for="personal">Externo</label>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="input input_radio">
                        <div>
                            <label for="tipo">Tipo:</label>
                        </div>
                        <div class="radios">
                            <input type="radio" name="tipo" value="correctivo" <?php if ($id != null) echo 'disabled ';
                                                                                if ($tipo == 'correctivo') echo 'checked'; ?>>
                            <label for="tipo">Correctivo</label>
                            <input type="radio" name="tipo" value="preventivo" <?php if ($id != null) echo 'disabled ';
                                                                                if ($tipo == 'preventivo') echo 'checked'; ?>>
                            <label for="tipo">Preventivo</label>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="input input_radio">
                        <div>
                            <label for="periodo">Periodicidad:</label>
                        </div>
                        <div class="radios">
                            <input type="radio" name="periodicidad" value="mensual" <?php if ($id != null) echo 'disabled ';
                                                                                    if ($periodicidad == 'mensual') echo 'checked'; ?>>
                            <label for="periodicidad">Mensual</label>
                            <input type="radio" name="periodicidad" value="trimestral" <?php if ($id != null) echo 'disabled ';
                                                                                        if ($periodicidad == 'trimestral') echo 'checked'; ?>>
                            <label for="periodicidad">Trimestral</label>
                            <input type="radio" name="periodicidad" value="semestral" <?php if ($id != null) echo 'disabled ';
                                                                                        if ($periodicidad == 'semestral') echo 'checked'; ?>>
                            <label for="periodicidad">Semestral</label>
                            <input type="radio" name="periodicidad" value="anual" <?php if ($id != null) echo 'disabled ';
                                                                                    if ($periodicidad == 'anual') echo 'checked'; ?>>

                            <label for="periodicidad">Anual</label>
                        </div>
                    </div>
                </div>
                <div class="input">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                </div>

                <?php if ($id == null) { ?>
                    <button id="btn_creacion_maqn">Agregar Maquina</button>
                <?php } ?>

            </form>
        </div>
    </div>

</main>

<?php require_once 'includes/footer.php'; ?>