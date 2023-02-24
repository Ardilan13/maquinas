<?php require_once 'includes/header.php';
require_once 'conexion.php';
$con = conectar();
$id = $_GET["id"] ?? null;
if ($id != null) {
    $registro = "SELECT * from orden where id=$id";
    $resultado = mysqli_query($con, $registro);
    $row = mysqli_fetch_assoc($resultado);
    $maquina = $row['id_maquina'];
    $fecha_solicitud = date('Y-m-d');
    $tipo_mantenimiento = $row['tipo_mantenimiento'];
    $descripcion = $row['descripcion'];
    $solicitud_material = $row['solicitud_material'];
    $solicitud = $row['solicitud'];
} else {
    $maquina = '';
    $fecha_solicitud = '';
    $tipo_mantenimiento = '';
    $descripcion = '';
    $solicitud_material = '';
    $solicitud = '';
}

?>
<main>
    <div class="container">
        <div class="header">
            <p>Solicitud de Servicio</p>
        </div>
        <div class="info">
            <form id="agregar_soli">
                <div class="input">
                    <label for="maquina">Maquina:</label>
                    <select id="maquina" name="maquina" value="<?php echo $maquina; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </select>
                </div>
                <div class="input">
                    <label for="fecha_solicitud">Fecha y Hora de la Solicitud:</label>
                    <input type="date" id="fecha_solicitud" name="fecha_solicitud" value="<?php echo $fecha_solicitud; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                </div>

                <div class="input">
                    <label for="tipo_mantenimiento">Tipo de Mantenimiento:</label>
                    <div>
                        <label for="tipo_mantenimiento">Mecanico Preventivo</label>
                        <input type="radio" name="tipo_mantenimiento" value="mecanico_preventivo" <?php if ($id != null) echo 'disabled ';
                                                                                                    if ($tipo_mantenimiento == 'mecanico_preventivo') echo 'checked'; ?>>
                    </div>
                    <div>
                        <label for="tipo_mantenimiento">Mecanico Conflictivo</label>
                        <input type="radio" name="tipo_mantenimiento" value="mecanico_conflictivo" <?php if ($id != null) echo 'disabled ';
                                                                                                    if ($tipo_mantenimiento == 'mecanico_conflictivo') echo 'checked'; ?>>
                    </div>
                    <div>
                        <label for="tipo_mantenimiento">Electrico Preventivo</label>
                        <input type="radio" name="tipo_mantenimiento" value="electrico_preventivo" <?php if ($id != null) echo 'disabled ';
                                                                                                    if ($tipo_mantenimiento == 'electrico_preventivo') echo 'checked'; ?>>
                    </div>
                    <div>
                        <label for="tipo_mantenimiento">Electrico Conflictivo</label>
                        <input type="radio" name="tipo_mantenimiento" value="electrico_conflictivo" <?php if ($id != null) echo 'disabled ';
                                                                                                    if ($tipo_mantenimiento == 'electrico_conflictivo') echo 'checked'; ?>>
                    </div>
                </div>

                <div class="input">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                </div>
                <div class="input">
                    <label for="solicitud_material">Solicitud de Materiales:</label>
                    <input type="text" id="solicitud_material" name="solicitud_material" value="<?php echo $solicitud_material; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                </div>
                <div class="input">
                    <label for="solicitud">Solicitado Por:</label>
                    <input type="text" id="solicitud" name="solicitud" value="<?php echo $solicitud; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                </div>
                <?php if($id == null){ ?>
                    <button id="btn_creacion_soli">Crear Solicitud</button>
                <?php } ?>
            </form>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>