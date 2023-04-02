<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Maquinas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preload" href="build/css/app.css" as="style" />
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css' rel='stylesheet' />
</head>

<body>
    <header>

        <div class="header_img_login">
            <picture>
                <source srcset="build/img/logo.jpg" type="image/jpg">
                <source srcset="build/img/logo.jpg" type="image/jpeg">
                <img class="logo" loading="lazy" src="build/img/logo.jpg" alt="Texto entrada blog">
            </picture>
            <p>MantUIS</p>
        </div>
        <div id="header_user">
            <a id="a_user"><?php echo $_SESSION["nombre"]; ?></a>
            <a id="cerrar" href="ajax/logout.php">Cerrar Sesion</a>
        </div>
    </header>
    <nav>
        <div class="links">
            <a href="menu.php">Inicio</a>
            <a href="mod_maquina.php">Activos</a>
            <a href="mod_inventario.php">Inventario</a>
            <a href="mod_solicitud.php">Solicitudes</a>
            <a href="mod_orden.php">Ordenes</a>
            <a href="mod_tarea.php">Planes</a>
            <a href="mod_calendario.php">Programacion</a>
        </div>
    </nav>