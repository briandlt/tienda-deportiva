<?php

    $categoria = $ruta[1];
    $pagina = $ruta[2];
    $productos = new Productos;
    $arrayProductos = $productos->categorias($categoria, $pagina);
    $numeroPaginas = $productos->paginacion($categoria);
    require_once('./views/categorias.view.php');

?>