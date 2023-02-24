<?php
require_once '../conexion.php';
$con = conectar();

$login = "SELECT id, nombre, codigo from maquina;";

$resultado = mysqli_query($con, $login);
if ($resultado->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) { ?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
    <?php }
} else { ?>
    <option></option>
<?php }
