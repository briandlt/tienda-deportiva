<?php

    require_once('../models/productos.model.php');
    $categoria = $_GET['categoria'];
    $pagina = $_GET['pagina'];
    $productos = new Productos;
    $arrayProductos = $productos->categorias($categoria, $pagina);
    $numeroPaginas = $productos->paginacion($categoria);
    require_once('../views/categorias.view.php');

?>