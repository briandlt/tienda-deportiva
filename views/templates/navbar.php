<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?php echo SERVER?>">
    <title>Tienda Deportiva</title>
    <link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Lobster" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo CSS ?>style.css">
    <link rel="stylesheet" href="<?php echo SERVER ?>fonts/fonts.css">
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
</head>
<body>
    <div class="contenedor">
        <header>
            <div class="logo animated bounce">
                <a href="index.php">SPORT-SHOP</a>
            </div>

            <a href="#" class="menuIcon"><img src="./iconos/menu-de-lineas.png" alt="menu"></a>
            <div class="navbar" id="navbar">
                <nav class="linksNav animated bounce">
                    <ul class="menu">
                        <li><a href="index.php"><span class="icon-home3"></span> Inicio</a></li>
                        <li><a href="#"><span class="icon-user"></span> Ingresar</a></li>
                        <li class="catego"><a href="#"><span class="icon-list"></span> Categorias <span class="flecha icon-circle-down"></span></a>
                            <div class="categorias">
                                <ul class="submenu">
                                    <li><a href="#">Futbol</a></li>
                                    <li><a href="#">Basquetbol</a></li>
                                    <li><a href="#">Beisbol</a></li>
                                    <li><a href="#">Tenis</a></li>
                            
                                </ul>
                            </div>
                        </li>
                        <li><a href="controllers/contacto.controller.php"><span class="icon-address-book"></span> Contacto</a></li>
                        <li><a href="#"><span class="icon-cart"></span> Carrito</a></li>
                    </ul>
                    
                </nav>
            </div>
        </header>