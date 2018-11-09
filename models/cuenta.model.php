<?php
    require_once('conexion.php');

    class Cuenta extends Conexion{

        public function Cuenta(){
            parent::__construct();
        }

        public function crearCuenta($nombre, $apellido, $telefono, $direccion, $colonia, $ciudad, $estado, $cp, $mail, $pass){
            $query = "INSERT INTO usuarios(nombre, apellido, correo, passwd, telefono, direccion, colonia, ciudad, estado, codigoPostal) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(1, $nombre, PDO::PARAM_STR);
            $stmt->bindParam(2, $apellido, PDO::PARAM_STR);
            $stmt->bindParam(3, $mail, PDO::PARAM_STR);
            $stmt->bindParam(4, $pass, PDO::PARAM_STR);
            $stmt->bindParam(5, $telefono, PDO::PARAM_INT);
            $stmt->bindParam(6, $direccion, PDO::PARAM_STR);
            $stmt->bindParam(7, $colonia, PDO::PARAM_STR);
            $stmt->bindParam(8, $ciudad, PDO::PARAM_STR);
            $stmt->bindParam(9, $estado, PDO::PARAM_STR);
            $stmt->bindParam(10, $cp, PDO::PARAM_INT);
            $stmt->execute();
            if($stmt){
                die('Registro exitoso');
            }else{
                die('Registro fallido');
            }
        }

        public function iniciarSesion($user, $pass){

            $query = "SELECT * FROM usuarios WHERE correo = ?";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(1, $user, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if(!$result) {
                die('Usuario incorrecto');
            }

            $query = "SELECT * FROM usuarios WHERE correo = ? AND passwd = ?";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(1, $user, PDO::PARAM_STR);
            $stmt->bindParam(2, $pass, PDO::PARAM_STR);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);


            if(!$usuario) {
                die('Contraseña incorrecta');
            }else{
                $nameSession = $usuario['nombre'] . ' ' . $usuario['apellido'];
                session_start();
                $_SESSION['usuario'] = $nameSession;
                
                // $json = array(
                //     'id' => $usuario['idUsuario'],
                //     'nombre' => $usuario['nombre'],
                //     'apellido' => $usuario['apellido'],
                //     'correo' => $usuario['correo'],
                //     'passwd' => $usuario['passwd'],
                //     'telefono' => $usuario['telefono'],
                //     'direccion' => $usuario['direccion'],
                //     'colonia' => $usuario['colonia'],
                //     'ciudad' => $usuario['ciudad'],
                //     'estado' => $usuario['estado'],
                //     'cp' => $usuario['codigoPostal']);

                // $jsonstring = json_encode($json);
                // die($jsonstring);
            }
            
        }

        public function cerrarSesion(){
            session_start();
            session_destroy();
            header('Location: home');
        }
    }
?>