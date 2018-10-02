<?php

    require('./models/productos.model.php');
    $productos = new Productos;
    $arrayProductos = $productos->productosPrincipal();
    require('./views/principal.view.php');


?>