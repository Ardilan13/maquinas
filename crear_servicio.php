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

    // Agregar código para seleccionar datos de la tabla maquina
    $query = "SELECT * FROM maquina WHERE id=$maquina";
    $result = mysqli_query($con, $query);
    $maquina_data = mysqli_fetch_assoc($result);

    $nombre = $maquina_data['nombre'];
    $codigo = $maquina_data['codigo'];
    $marca = $maquina_data['marca'];
    $modelo = $maquina_data['modelo'];
    $ubicacion = $maquina_data['ubicacion'];
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
}

?>
<main>
    <div class="container">
        <div class="header">
            <p>Solicitud de Servicio</p>
        </div>
        <div class="info">
            <form id="agregar_soli">
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                <div class="input">
                    <label for="maquina">Maquina:</label>
                    <select id="" name="maquina" <?php if ($id != null) echo 'disabled '; ?>>
                        <?php if ($id != null) { ?>
                            <option value="<?php echo $maquina; ?>"><?php echo $nombre; ?></option>
                        <?php } else { ?>
                            <?php
                            // Agregar código para seleccionar todas las maquinas de la tabla maquina
                            $query = "SELECT * FROM maquina";
                            $result = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
                <?php if ($id != null) { ?>
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
                <?php } ?>
                <div class="input">
                    <label for="fecha_solicitud">Fecha de la Solicitud:</label>
                    <input type="date" id="fecha_solicitud" name="fecha_solicitud" value="<?php echo $fecha_solicitud; ?>">
                </div>

                <div class="radio_buttons">
                    <div>
                        <label for="tipo_mantenimiento">Tipo de Mantenimiento:</label>
                    </div>
                    <div class="radios">
                        <div>
                            <input type="radio" name="tipo_mantenimiento" value="mecanico_preventivo" <?php if ($tipo_mantenimiento == 'mecanico_preventivo') echo 'checked'; ?>>

                            <label for="tipo_mantenimiento">Mecanico Preventivo</label>
                        </div>
                        <div>
                            <input type="radio" name="tipo_mantenimiento" value="mecanico_conflictivo" <?php if ($tipo_mantenimiento == 'mecanico_conflictivo') echo 'checked'; ?>>
                            <label for="tipo_mantenimiento">Mecanico Correctivo</label>
                        </div>
                        <div>
                            <input type="radio" name="tipo_mantenimiento" value="electrico_preventivo" <?php if ($tipo_mantenimiento == 'electrico_preventivo') echo 'checked'; ?>>
                            <label for="tipo_mantenimiento">Electrico Preventivo</label>
                        </div>
                        <div>
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
                    <label for="solicitud_material">Solicitud de Materiales:</label>
                    <input type="text" id="solicitud_material" name="solicitud_material" value="<?php echo $solicitud_material; ?>">
                </div>
                <div class="input">
                    <label for="solicitud">Solicitado Por:</label>
                    <input type="text" id="solicitud" name="solicitud" value="<?php echo $solicitud; ?>">
                </div>
                <button id="regresar_soli">Volver</button>
                <?php if ($id == null) { ?>
                    <button id="btn_creacion_soli">Crear Solicitud</button>
                <?php } else { ?>
                    <button id="actualizar_sol">Actualizar</button>
                <?php }  ?>
            </form>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>