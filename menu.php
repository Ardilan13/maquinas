<?php require_once 'includes/header.php'; ?>

<main>
    <div class="container">
        <div class="header">
            <p>Menu Principal</p>
        </div>
        <div class="slider-container">
            <div class="slider position"></div>
        </div>
        <div class="info menu_principal">
            <a class="mp_btn" href="mod_maquina.php">
                <img src="build/img/activos.jpeg" alt="">
                Activos
            </a>
            <a class="mp_btn" href="mod_inventario.php">
                <img src="build/img/inventario.jpeg" alt="">
                Inventario
            </a>
            <a class="mp_btn" href="mod_solicitud.php">
                <img src="build/img/solicitud.jpeg" alt="">
                Solicitudes de Mantenimiento
            </a>
            <a class="mp_btn" href="mod_orden.php">
                <img src="build/img/orden.jpeg" alt="">
                Ordenes de Trabajo
            </a>
            <a class="mp_btn" href="mod_tarea.php">
                <img src="build/img/planes.jpeg" alt="">
                Planes de Mantenimiento
            </a>
            <a class="mp_btn" href="mod_calendario.php">
                <img src="build/img/programacion.jpeg" alt="">
                Programación
            </a>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>