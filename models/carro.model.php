<?php
    require_once('conexion.php');

    class Carro extends Conexion{

        public function Carro(){
            parent::__construct();
        }

        public function agregarProducto($id){
            $query = "SELECT * FROM productos WHERE idProducto = ?";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(1, $id, PDO::PARAM_INT);
            $stmt->execute();
            $producto = $stmt->fetch(PDO::FETCH_ASSOC);

            if(empty($_SESSION['carro'])){
                $_SESSION['carro'] = array(array('idProducto' => $producto['idProducto'],
                                                'producto' => $producto['producto'],
                                                'precio' => $producto['precio'],
                                                'imagen' => $producto['imagen'],
                                                'cantidad' => 1));
                $carro = $_SESSION['carro'];
            }else{
                $carro = $_SESSION['carro'];
                $repetido = false;

                for($i=0; $i<count($carro); $i++){
                    if($id == $carro[$i]['idProducto']){
                        $repetido = true;
                        break;
                    }
                }

                if($repetido){
                    $cantidad = $carro[$i]['cantidad']+1;
                    $carro[$i]['cantidad'] = $cantidad;
                }else{
                    array_push($carro, array('idProducto' => $producto['idProducto'],
                                        'producto' => $producto['producto'],
                                        'precio' => $producto['precio'],
                                        'imagen' => $producto['imagen'],
                                        'cantidad' => 1));
                }
            }
            $_SESSION['carro'] = $carro;
            return $_SESSION['carro'];
        }

        public function eliminarProducto($id){
            $carro = $_SESSION['carro'];
            for($i=0; $i<count($carro); $i++){
                if($id == $carro[$i]['idProducto']){
                    $index = $i;
                    break;
                }
            }
            
            foreach($carro as $c){
                if($c["idProducto"]!=$id){
                    $nuevoCarro[] = $c;
                }
            }
            $_SESSION['carro'] = $nuevoCarro;

            $response = json_encode($_SESSION['carro']);
            echo $response;
        }

        public function actualizarCarro($id, $operacion){
            $carro = $_SESSION['carro'];
            $found = false;
            for($i=0; $i<count($carro); $i++){
                if($id == $carro[$i]['idProducto']){
                    $found = true;
                    break;
                }
            }

            if($found){
                if($operacion == 'suma'){
                    $cantidad = $carro[$i]['cantidad'] + 1;
                }else if($operacion == 'resta'){
                    $cantidad = $carro[$i]['cantidad'] - 1;                    
                }else{
                    die("End");
                }
                $carro[$i]['cantidad'] = $cantidad;
            }
            $_SESSION['carro'] = $carro;

            $response = json_encode($_SESSION['carro']);
            echo $response;
        }
    }
?>