<?php

    $ruta = explode('/', $_GET['views']);
    $id = $ruta[1];
    $productos = new Productos;
    $producto = $productos->detallesProducto($id);
    require_once('./views/detallesProducto.view.php');
    
?>