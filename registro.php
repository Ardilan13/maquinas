<?php require_once 'includes/header_login.php'; ?>

<main>
    <div class="container">
        <div class="header">
            <p>Registro Usuario</p>
        </div>
        <div class="info">
            <form id="ingreso">
                <div class="input">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre">
                </div>
                <div class="input">
                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo">
                </div>
                <div class="input">
                    <label for="clave">Contraseña:</label>
                    <input type="password" id="clave" name="clave">
                </div>
                <div class="input">
                    <label for="clave_r">Repetir Contraseña:</label>
                    <input type="password" id="clave_r" name="clave_r">
                </div>
            </form>
            <button id="btn_registro">Ingresar</button>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>