<?php
    require('conexion.php');

    class Productos extends Conexion{

        private $stmt;
        
        public function Productos(){
            parent::__construct();
        }

        public function productosPrincipal(){
            $query = 'SELECT * FROM PRODUCTOS ORDER BY RAND() LIMIT 12';
            $this->stmt = $this->conexion->prepare($query);
            $this->stmt->execute();
            $this->productos = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            return $this->productos;
        }

        public function paginacion($categoria){

            $query = 'SELECT * FROM PRODUCTOS WHERE CATEGORIA = ?';
            $this->stmt = $this->conexion->prepare($query);
            $this->stmt->bindParam(1, $categoria, PDO::PARAM_STR);
            $this->stmt->execute();
            $this->stmt->fetchAll();
            $rows = $this->stmt->rowCount();
            $this->numeroPaginas = ceil($rows / 9);

            return $this->numeroPaginas;
        }

        public function categorias($categoria, $pagina){

            $sizePag = 9;
            $inicioPagina = ($pagina-1) * $sizePag;
            $query = "SELECT * FROM PRODUCTOS WHERE CATEGORIA = ? LIMIT $inicioPagina, $sizePag";
            $this->stmt = $this->conexion->prepare($query);
            $this->stmt->bindParam(1, $categoria, PDO::PARAM_STR);
            $this->stmt->execute();
            $this->productos = $this->stmt->fetchAll(PDO::FETCH_ASSOC);

            return $this->productos;
        }

        public function detallesProducto($id){
            $query = 'SELECT * FROM PRODUCTOS WHERE idProducto = ?';
            $this->stmt = $this->conexion->prepare($query);
            $this->stmt->bindParam(1, $id, PDO::PARAM_STR);
            $this->stmt->execute();
            $this->producto = $this->stmt->fetch(PDO::FETCH_ASSOC);

            return $this->producto;
        }
        public function __destruct(){
            parent::close($this->stmt);
        }
    }
?>