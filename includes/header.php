<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Maquinas</title>
    <link rel="preload" href="build/css/app.css" as="style" />
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <header>

    <picture>
                <source srcset="build/img/images.webp" type="image/webp">
                <source srcset="build/img/images.jpg" type="image/jpeg">
                <img class="logo" loading="lazy" src="build/img/images.jpg" alt="Texto entrada blog">
                
            </picture>
            <p>Inventario de Maquinaria</p>
            
        

       
        
        <div id="header_user">
            <a id="a_user"><?php echo $_SESSION["nombre"]; ?></a>
            <a href="ajax/logout.php">Cerrar Sesion</a>
        </div>
    </header>