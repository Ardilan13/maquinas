<?php require_once 'includes/header.php'; 
require_once 'conexion.php';
$con = conectar();
$id = $_GET["id"] ?? null;

if ($id != null) {
    $registro = "SELECT * from repuesto where id=$id";
    $resultado = mysqli_query($con, $registro);
    $row = mysqli_fetch_assoc($resultado);
    $nombre = $row['nombre'];
    $marca = $row['marca'];
    $referencia = $row['referencia'];
    $cantidad = $row['cantidad'];
    $valor = $row['valor'];
} else {
    $nombre = '';
    $marca = '';
    $referencia = '';
    $cantidad = '';
    $valor = '';
}

?>
<main>
    <div class="container">
        <div class="header">
            <p>Crear Repuesto</p>
        </div>
        <div class="info">
            <form id="agregar_rep">
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                <div class="input">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
                </div>
                <div class="input">
                    <label for="marca">Marca:</label>
                    <input type="text" id="marca" name="marca" value="<?php echo $marca; ?>">
                </div>
                <div class="input">
                    <label for="referencia">Referencia:</label>
                    <input type="text" id="referencia" name="referencia" value="<?php echo $referencia; ?>">
                </div>
                <div class="input">
                    <label for="cantidad">Cantidad:</label>
                    <input type="text" id="cantidad" name="cantidad" value="<?php echo $cantidad; ?>">
                </div>
                <div class="input">
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" value="<?php echo $valor; ?>">
                </div>
            </form>
            <?php if ($id == null) { ?>
                <button id="btn_creacion_rep">Agregar Repuesto</button>
                <?php } else { ?>
                    <button id="actualizar_rep">Actualizar</button>
                    <button id="regresar_rep">Volver</button>
                <?php }  ?>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>