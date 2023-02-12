<?php require_once 'includes/header.php';
require_once 'conexion.php';
$con = conectar();
/* $resultado = mysqli_query($con, "Select * from usuario");
while ($row = mysqli_fetch_assoc($resultado)) {
    echo $row['id'];
    echo $row['nombre'];
} */
?>

<main>
    <div class="container">
        <div class="header">
            <p>Ingresar</p>
        </div>
        <div class="info">
            <form>
                <div class="input">
                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo">
                </div>
                <div class="input">
                    <label for="clave">Contraseña:</label>
                    <input type="password" id="clave" name="clave">
                </div>
                <button id="btn_login">Ingresar</button>
            </form>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>