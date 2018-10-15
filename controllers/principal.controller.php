<?php

    require_once('./models/productos.model.php');
    $productos = new Productos;
    $arrayProductos = $productos->productosPrincipal();
    require_once('./views/principal.view.php');
    require_once('cuenta.controller.php');



?>