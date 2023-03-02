<?php require_once 'includes/header.php'; ?>

<main>
    <div class="container">
        <div class="header">
            <p>Menu Principal</p>
        </div>
        <div class="info menu_principal">
            <a class="mp_btn" href="mod_maquina.php">Activos</a>
            <a class="mp_btn" href="mod_inventario.php">Inventario</a>
            <a class="mp_btn" href="mod_solicitud.php">Solicitudes de Mantenimiento</a>
            <a class="mp_btn" href="mod_orden.php">Ordenes de Trabajo</a>
            <a class="mp_btn" href="mod_tarea.php">Planes de Mantenimiento</a>
            <a class="mp_btn" href="mod_calendario.php">Calendario</a>
            <a id="cerrar_sesion" href="ajax/logout.php">Cerrar Sesion</a>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>