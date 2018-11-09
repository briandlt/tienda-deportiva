<?php
    require('conexion.php');

    class Productos extends Conexion{
        
        public function Productos(){
            parent::__construct();
        }

        public function productosPrincipal(){
            $query = 'SELECT * FROM PRODUCTOS ORDER BY RAND() LIMIT 12';
            $stmt = $this->conexion->prepare($query);
            $stmt->execute();
            $this->productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $this->productos;
        }

        public function paginacion($categoria){

            $query = 'SELECT * FROM PRODUCTOS WHERE CATEGORIA = ?';
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(1, $categoria, PDO::PARAM_STR);
            $stmt->execute();
            $stmt->fetchAll();
            $rows = $stmt->rowCount();
            $this->numeroPaginas = ceil($rows / 9);

            return $this->numeroPaginas;
        }

        public function categorias($categoria, $pagina){

            $sizePag = 9;
            $inicioPagina = ($pagina-1) * $sizePag;
            $query = "SELECT * FROM PRODUCTOS WHERE CATEGORIA = ? LIMIT $inicioPagina, $sizePag";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(1, $categoria, PDO::PARAM_STR);
            $stmt->execute();
            $this->productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $this->productos;
        }

        public function detallesProducto($id){
            $query = 'SELECT * FROM PRODUCTOS WHERE idProducto = ?';
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(1, $id, PDO::PARAM_STR);
            $stmt->execute();
            $this->producto = $stmt->fetch(PDO::FETCH_ASSOC);

            return $this->producto;
        }
    }
?>