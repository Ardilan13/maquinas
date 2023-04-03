<?php require_once 'includes/header.php';
require_once 'conexion.php';
$con = conectar();
$id = $_GET["id"] ?? null;
if ($id != null) {
    $registro = "SELECT * from componente where id=$id";
    $resultado = mysqli_query($con, $registro);
    $row = mysqli_fetch_assoc($resultado);
    $maquina = $row['id_maquina'];
    $nombre_componente = $row['nombre_componente'];
    $marca = $row['marca'];
    $referencia = $row['referencia'];
} else {
    $nombre_componente = '';
    $marca = '';
    $referencia = '';
    $maquina = '';
}
?>
<main>
    <div class="container">
        <div class="header">
            <p>Crear Componente</p>
        </div>
        <div class="info">
            <form id="agregar_comp">
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                <div class="input">
                    <label for="maquina">Maquina:</label>
                    <select id="maquina" name="maquina" value="<?php echo $maquina; ?>">

                    </select>
                </div>
                <div class="input">
                    <label for="nombre_componente">Componente:</label>
                    <input type="text" id="nombre_componente" name="nombre_componente" value="<?php echo $nombre_componente; ?>">
                </div>
                <div class="input">
                    <label for="marca">Marca:</label>
                    <input type="text" id="marca" name="marca" value="<?php echo $marca; ?>">
                </div>
                <div class="input">
                    <label for="referencia">Referencia:</label>
                    <input type="text" id="referencia" name="referencia" value="<?php echo $referencia; ?>">
                </div>
            </form>
            <?php if ($id == null) { ?>
                <button id="btn_creacion_comp">Agregar Componente</button>
            <?php } else { ?>
                <button id="actualizar_com">Actualizar</button>
                <button id="regresar_comp">Volver</button>
            <?php }  ?>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>