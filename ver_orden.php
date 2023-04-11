<?php require_once 'includes/header.php';
require_once 'conexion.php';
$con = conectar();

$id = $_GET["id"] ?? null;

if ($id != null) {
    $registro = "SELECT * from orden where id=$id";
    $resultado = mysqli_query($con, $registro);
    $row = mysqli_fetch_assoc($resultado);
    $maquina = $row['id_maquina'];
    $fecha_solicitud = $row['fecha_solicitud'];
    $tipo_mantenimiento = $row['tipo_mantenimiento'];
    $descripcion = $row['descripcion'];
    $solicitud_material = $row['solicitud_material'];
    $solicitud = $row['solicitud'];
    $motivo = $row['motivo'];
    $lugar_orden = $row['lugar_orden'];
    $asignacion = $row['asignacion'];
    $observaciones = $row['observaciones'];
    $herramientas = $row['herramientas'];
    $fecha_hora_inicio = $row['fecha_hora_inicio'];
    $fecha_hora_fin = $row['fecha_hora_fin'];
    $descripcion_trabajo = $row['descripcion_trabajo'];
    $estado = $row['estado'];

    // Agregar código para seleccionar datos de la tabla maquina
    $query = "SELECT * FROM maquina WHERE id=$maquina";
    $result = mysqli_query($con, $query);
    $maquina_data = mysqli_fetch_assoc($result);

    $nombre = $maquina_data['nombre'];
    $codigo = $maquina_data['codigo'];
    $marca = $maquina_data['marca'];
    $modelo = $maquina_data['modelo'];
    $ubicacion = $maquina_data['ubicacion'];
    $periodicidad = $maquina_data['periodicidad'];
} else {
    $maquina = '';
    $fecha_solicitud = '';
    $tipo_mantenimiento = '';
    $descripcion = '';
    $solicitud_material = '';
    $solicitud = '';
    $nombre = '';
    $codigo = '';
    $marca = '';
    $modelo = '';
    $ubicacion = '';
    $periodicidad = '';
    $motivo = '';
    $lugar_orden = '';
    $asignacion = '';
    $observaciones = '';
    $herramientas = '';
    $fecha_hora_inicio = '';
    $fecha_hora_fin = date("Y-m-d H:i:s");
    $descripcion_trabajo = '';
    $estado = '';
}

?>

<main>
    <div class="container">
        <div class="header">
            <p>Consultar Orden de Trabajo</p>
        </div>
        <div class="info">
            <form id="agregar_orden">
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                <p>Detalles del Activo</p>
                <div class="flex">
                    <div class="input">
                        <label for="maquina">Maquina:</label>
                        <select id="maquina" name="maquina" value="<?php echo $maquina; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                            <?php if ($id != null) { ?>
                                <option value="<?php echo $maquina; ?>"><?php echo $nombre; ?></option>
                            <?php } else { ?>
                                <?php
                                // Agregar código para seleccionar todas las maquinas de la tabla maquina
                                $query = "SELECT * FROM maquina";
                                $result = mysqli_query($con, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <option value="<?php echo $row['id']; ?>" <?php if ($row['id'] == $maquina) echo 'selected'; ?>><?php echo $row['nombre']; ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input">
                        <label for="codigo">Codificacion:</label>
                        <input type="text" id="codigo" name="codigo" value="<?php echo $codigo; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                    <div class="input">
                        <label for="marca">Marca:</label>
                        <input type="text" id="marca" name="marca" value="<?php echo $marca; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                    <div class="input">
                        <label for="modelo">Modelo:</label>
                        <input type="text" id="modelo" name="modelo" value="<?php echo $modelo; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                    <div class="input">
                        <label for="ubicacion">Numero de Inventario:</label>
                        <input type="text" id="ubicacion" name="ubicacion" value="<?php echo $ubicacion; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                    <div class="input">
                        <label for="periodicidad">Periodicidad:</label>
                        <input type="text" id="periodicidad" name="periodicidad" value="<?php echo $periodicidad; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                </div>
                <p>Detalles del Plan de Mantenimiento</p>
                <div class="flex">
                    <div class="input">
                        <label for="motivo">Motivo:</label>
                        <input type="text" id="motivo" name="motivo" value="<?php echo $motivo; ?>">
                    </div>
                    <div class="input">
                        <label for="lugar_orden">Lugar de la Actividad:</label>
                        <input type="text" id="lugar_orden" name="lugar_orden" value="<?php echo $lugar_orden; ?>">
                    </div>
                    <div class="input">
                        <label for="asignacion">Asignada A::</label>
                        <input type="text" id="asignacion" name="asignacion" value="<?php echo $asignacion; ?>">
                    </div>
                    <div class="input">
                        <label for="herramientas">Herramientas Necesarias:</label>
                        <input type="text" id="herramientas" name="herramientas" value="<?php echo $herramientas; ?>">
                    </div>
                    <div class="input">
                        <label for="descripcion_trabajo">Descripcion del trabajo:</label>
                        <input type="text" id="descripcion_trabajo" name="descripcion_trabajo" value="<?php echo $descripcion_trabajo; ?>">
                    </div>
                    <div class="input">
                        <label for="observaciones">Observaciones:</label>
                        <input type="text" id="observaciones" name="observaciones" value="<?php echo $observaciones; ?>">
                    </div>
                </div>
                <p>Reporte De Solicitud</p>
                <div class="flex">
                <div class="grid">
                        <div class="input input_radio">
                            <div>
                                <label for="tipo_mantenimiento">Tipo de Mantenimiento:</label>
                            </div>

                            <div class="radios">

                                <input type="radio" name="tipo_mantenimiento" value="mecanico_preventivo" <?php if ($tipo_mantenimiento == 'mecanico_preventivo') echo 'checked'; ?>>

                                <label for="tipo_mantenimiento">Mecanico Preventivo</label>


                                <input type="radio" name="tipo_mantenimiento" value="mecanico_conflictivo" <?php if ($tipo_mantenimiento == 'mecanico_conflictivo') echo 'checked'; ?>>
                                <label for="tipo_mantenimiento">Mecanico Correctivo</label>


                                <input type="radio" name="tipo_mantenimiento" value="electrico_preventivo" <?php if ($tipo_mantenimiento == 'electrico_preventivo') echo 'checked'; ?>>
                                <label for="tipo_mantenimiento">Electrico Preventivo</label>


                                <input type="radio" name="tipo_mantenimiento" value="electrico_conflictivo" <?php if ($tipo_mantenimiento == 'electrico_conflictivo') echo 'checked'; ?>>
                                <label for="tipo_mantenimiento">Electrico Correctivo</label>
                            </div>
                        </div>
                    </div>
                    

                    <div class="input">
                        <label for="descripcion">Descripcion del Servicio:</label>
                        <input type="text" id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>">
                    </div>
                    <div class="input">
                        <label for="fecha_hora_inicio">Fecha_Hora Inicio:</label>
                        <input type="datetime-local" id="fecha_hora_inicio" name="fecha_hora_inicio" value="<?php echo $fecha_hora_inicio; ?>">
                    </div>
                    <div class="input">
                        <label for="solicitud_material">Solicitud de Materiales:</label>
                        <input type="text" id="solicitud_material" name="solicitud_material" value="<?php echo $solicitud_material; ?>">
                    </div>
                    <div class="input">
                        <label for="fecha_hora_fin">Fecha_Hora Fin:</label>
                        <input type="datetime-local" id="fecha_hora_fin" name="fecha_hora_fin" value="<?php echo $fecha_hora_fin; ?>">
                    </div>
                    <div class="input">
                        <label for="solicitud">Solicitado Por:</label>
                        <input type="text" id="solicitud" name="solicitud" value="<?php echo $solicitud; ?>">
                    </div>
                    
                        <div class="input input_radio">
                            <div>
                                <label for="estado">Estado:</label>
                            </div>
                            <div class="radios">
                                <input type="radio" name="estado" value="abierto" <?php if ($estado == 'abierto') echo 'checked'; ?>>
                                <label for="estado">Abierto</label>

                                <input type="radio" name="estado" value="cerrado" <?php if ($estado == 'cerrado') echo 'checked'; ?>>
                                <label for="estado">Cerrado</label>

                            </div>
                        
                    </div>
                </div>
                <?php if ($id != null) { ?>
                    <button id="regresar_orden">Volver</button>
                    <button id="actualizar_orden">Actualizar</button>
                <?php }  ?>

            </form>
        </div>
    </div>

</main>

<?php require_once 'includes/footer.php'; ?>