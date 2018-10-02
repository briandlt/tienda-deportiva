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
    }


?>