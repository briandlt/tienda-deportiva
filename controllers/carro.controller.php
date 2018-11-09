<?php 
    if(isset($ruta[1])){
        $id = $ruta[1];
        $carro = new Carro;
        $carrito = $carro->agregarProducto($id);
        header('location: ../carro');
    }else if(isset($_POST['idDelete'])){
        $id = $_POST['idDelete'];
        $carro = new Carro;
        $carrito = $carro->eliminarProducto($id);
    }else if(isset($_POST['idUpdate'])){
        $id = $_POST['idUpdate'];
        $operacion = $_POST['operacion'];
        $carro = new Carro;
        $carrito = $carro->actualizarCarro($id, $operacion);
    }else{
        require_once('./views/carro.view.php');
    }
?>