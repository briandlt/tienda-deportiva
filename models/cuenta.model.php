<?php
    require_once('conexion.php');

    class Cuenta extends Conexion{

        public function Cuenta(){
            parent::__construct();
        }

        public function crearCuenta($nombre, $apellido, $telefono, $direccion, $colonia, $ciudad, $estado, $cp, $mail, $pass){
            $passwd = $this->encriptar($pass);
            $query = "INSERT INTO usuarios(nombre, apellido, correo, passwd, telefono, direccion, colonia, ciudad, estado, codigoPostal) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $this->stmt = $this->conexion->prepare($query);
            $this->stmt->bindParam(1, $nombre, PDO::PARAM_STR);
            $this->stmt->bindParam(2, $apellido, PDO::PARAM_STR);
            $this->stmt->bindParam(3, $mail, PDO::PARAM_STR);
            $this->stmt->bindParam(4, $passwd, PDO::PARAM_STR);
            $this->stmt->bindParam(5, $telefono, PDO::PARAM_INT);
            $this->stmt->bindParam(6, $direccion, PDO::PARAM_STR);
            $this->stmt->bindParam(7, $colonia, PDO::PARAM_STR);
            $this->stmt->bindParam(8, $ciudad, PDO::PARAM_STR);
            $this->stmt->bindParam(9, $estado, PDO::PARAM_STR);
            $this->stmt->bindParam(10, $cp, PDO::PARAM_INT);
            $this->stmt->execute();
            if($this->stmt){
                die('Registro exitoso');
            }else{
                die('Registro fallido');
            }
        }

        public function iniciarSesion($user, $pass){
            $query = "SELECT * FROM usuarios WHERE correo = ?";
            $this->stmt = $this->conexion->prepare($query);
            $this->stmt->bindParam(1, $user, PDO::PARAM_STR);
            $this->stmt->execute();
            $result = $this->stmt->fetch(PDO::FETCH_ASSOC);
            
            if(!$result) {
                die('Usuario incorrecto');
            }
            
            $passwd = $this->encriptar($pass);
            $query = "SELECT * FROM usuarios WHERE correo = ? AND passwd = ?";
            $this->stmt = $this->conexion->prepare($query);
            $this->stmt->bindParam(1, $user, PDO::PARAM_STR);
            $this->stmt->bindParam(2, $passwd, PDO::PARAM_STR);
            $this->stmt->execute();
            $usuario = $this->stmt->fetch(PDO::FETCH_ASSOC);


            if(!$usuario) {
                die('Contraseña incorrecta');
            }else{
                $nameSession = $usuario['nombre'] . ' ' . $usuario['apellido'];
                session_start();
                $_SESSION['usuario'] = $nameSession;
            }
            
        }

        public function cerrarSesion(){
            session_start();
            session_destroy();
            header('Location: home');
        }

        public function __destruct(){
            parent::close($this->stmt);
        }
    }
?>