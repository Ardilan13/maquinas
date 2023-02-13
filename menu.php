<?php require_once 'includes/header.php'; ?>

<main>
    <div class="container">
        <div class="header">
            <p>Menu Principal</p>
        </div>
        <div class="info menu_principal">
            <a class="mp_btn" href="pages/.php">Maquinas</a>
            <a class="mp_btn" href="pages/.php">Inventario</a>
            <a class="mp_btn" href="pages/.php">Solicitudes de Servicio</a>
            <a class="mp_btn" href="pages/.php">Ordenes de Trabajo</a>
            <a class="mp_btn" href="pages/.php">Prestamos</a>
            <a class="mp_btn" href="pages/.php">Tareas</a>
            <a class="mp_btn" href="pages/.php">Calendario</a>
            <a id="cerrar_sesion" href="ajax/logout.php">Cerrar Sesion</a>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>