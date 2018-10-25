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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> -->
    <link rel="stylesheet" href="<?php echo SERVER ?>iziModal-master/css/iziModal.min.css">
    <link rel="stylesheet" href="<?php echo SERVER ?>toastr/toastr.min.css">
</head>
<body>
    <div class="contenedor">
        <header class="headerTemplate">
            <div class="logo animated bounce">
                <a href="home">SPORT-SHOP</a>
            </div>

            <a href="#" class="menuIcon"><img src="./iconos/menu-de-lineas.png" alt="menu"></a>
            <div class="navbar" id="navbar">
                <nav class="linksNav animated bounce">
                    <ul class="menu">
                        <li><a href="home"><span class="icon-home3"></span> Inicio</a></li>
                        <li id="sesion"><a href="#"><span class="icon-user"></span> Ingresar</a></li>
                        <li class="catego"><a><span class="icon-list"></span> Categorias <span class="flecha icon-circle-down"></span>
                            <div class="categorias">
                                <ul class="submenu">
                                    <li><a href="categorias/futbol/1">Futbol</a></li>
                                    <li><a href="categorias/basquetbol/1">Basquetbol</a></li>
                                    <li><a href="categorias/beisbol/1">Beisbol</a></li>
                                    <li><a href="categorias/tenis/1">Tenis</a></li>
                            
                                </ul>
                            </div>
                        </li>
                        <li><a href="contacto"><span class="icon-address-book"></span> Contacto</a></li>
                        <li class="link"><a href="#"><span class="icon-cart"></span> Carrito</a></li>
                    </ul>
                    
                </nav>
            </div>
        </header>
        <?php require_once(RAIZ.'/controllers/cuenta.controller.php') ?>