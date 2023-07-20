<?php require_once 'includes/header.php';
require_once 'conexion.php';
$con = conectar();
$id = $_GET["id"] ?? null;
if ($id != null) {
    $registro = "SELECT * from tarea where id=$id";
    $resultado = mysqli_query($con, $registro);
    $row = mysqli_fetch_assoc($resultado);
    $maquina = $row['id_maquina'];
    $componente = $row['id_componente'];
    $activacion = $row['activacion'];
    $proxima_activacion = $row['proxima_activacion'];
    $descripcion = $row['descripcion'];

    // Agregar código para seleccionar datos de la tabla maquina
    $query = "SELECT * FROM maquina WHERE id=$maquina";
    $result = mysqli_query($con, $query);
    $maquina_data = mysqli_fetch_assoc($result);

    $nombre = $maquina_data['nombre'];
    $codigo = $maquina_data['codigo'];
    $periodicidad = $maquina_data['periodicidad'];

    // Agregar código para seleccionar datos de la tabla componente
    $component_data = null;
    if ($componente != null) {
        $query = "SELECT * FROM componente WHERE id=$componente";
        $result = mysqli_query($con, $query);
        $component_data = mysqli_fetch_assoc($result);
    }

    // Verificar si $component_data no es null antes de acceder a la posición 'nombre_componente'
    if ($component_data != null && $componente != null) {
        $nombre_componente = $component_data['nombre_componente'];
    } else {
        // Si $component_data es null, asignar un valor predeterminado o mostrar un mensaje de error
        $nombre_componente = '';
    }
} else {
    $activacion = '';
    $proxima_activacion = '';
    $maquina = '';
    $nombre = '';
    $periodicidad = '';
    $descripcion = '';
    $nombre_componente = '';
    $componente = null;
    $codigo = '';
}

?>
<main>
    <div class="container">
        <div class="header">
            <p>Plan de Mantenimiento</p>
        </div>
        <div class="info">
        <?php if ($id != null) { ?>
            <div class="input">
                <label for="codigo">Codigo:</label>
                <input type="text" id="codigo" name="codigo" value="<?php echo $codigo; ?>" <?php if ($id != null) echo 'disabled '; ?>>
            </div>
            <?php } ?>
            <form id="agregar_tar">
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
                <div class="input">
                    <label for="maquina">Componente:</label>
                    <select id="" name="componente" <?php if ($id != null) echo 'disabled '; ?>>
                        <?php if ($id != null) { ?>
                            <option value="<?php echo $componente; ?>" selected><?php echo $nombre_componente; ?></option>
                            <?php } else {
                            // Agregar código para seleccionar todos los componentes de la tabla componente
                            $query = "SELECT * FROM componente";
                            $result = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $selected = ($row['id'] == $componente) ? 'selected' : '';
                            ?>
                                <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>><?php echo $row['nombre_componente']; ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>

                <?php if ($id != null) { ?>
                    <div class="input">
                        <label for="periodicidad">Periodicidad:</label>
                        <input type="text" id="periodicidad" name="periodicidad" value="<?php echo $periodicidad; ?>" <?php if ($id != null) echo 'disabled '; ?>>
                    </div>
                <?php } ?>
                <div class="input">
                    <label for="descripcion">Descripcion Plan:</label>
                    <input type="text" id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>">
                </div>
                <div class="input">
                    <label for="activacion">Activacion:</label>
                    <input type="date" id="activacion" name="activacion" value="<?php echo $activacion; ?>">
                </div>
                <div class="input">
                    <label for="proxima_activacion">Proxima_Activacion:</label>
                    <input type="date" id="proxima_activacion" name="proxima_activacion" value="<?php echo $proxima_activacion; ?>">
                </div>
                <button id="regresar_tar">Volver</button>
                <?php if ($id == null) { ?>
                    <button id="btn_creacion_tar">Crear Tarea</button>
                <?php } else { ?>
                    <button id="actualizar_tar">Actualizar</button>
                <?php }  ?>
            </form>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>