<?php 
    session_start();
    require_once('./core/core.php');
    require_once('./controllers/cuenta.controller.php');

    if(isset($_GET['views'])){
        $listaBlanca = ['categorias', 'contacto', 'cuenta', 'detallesProducto', 'home', 'cerrarSesion', 'carro'];
        $ruta = explode('/', $_GET['views']);
        if(in_array($ruta[0], $listaBlanca)){
            require_once('./controllers/'.$ruta[0].'.controller.php');
        }else{
            require_once('./controllers/home.controller.php');            
        }
    }else{
        require_once('./controllers/home.controller.php');
    }
?>



