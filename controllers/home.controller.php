<?php

    $productos = new Productos;
    $arrayProductos = $productos->productosPrincipal();
    require_once('./views/home.view.php');
?>