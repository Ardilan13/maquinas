<?php require_once 'includes/header_login.php'; ?>

<main>
    <div class="container">
        <div class="header">
            <p>Ingresar</p>
        </div>
        <div class="info">
            <form id="ingreso">
                <div class="input">
                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo">
                </div>
                <div class="input">
                    <label for="clave">Contraseña:</label>
                    <input type="password" id="clave" name="clave">
                </div>
            </form>
            <button id="btn_login">Ingresar</button>
        </div>
        <p>Gestión del mantenimiento preventivo para equipos críticos dentro de la Universidad Industrial de Santander SEDE PRINCIPAL.</p>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>