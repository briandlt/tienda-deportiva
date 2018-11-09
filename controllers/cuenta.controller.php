<?php
    $user = isset($_POST['user']) ? $_POST['user'] : 'null';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : 'null';

    $nombre = isset($_POST['nombre1'])? $_POST['nombre1'] : 'null';
    $apellido = isset($_POST['apellido1'])? $_POST['apellido1'] : 'null';
    $telefono = isset($_POST['telefono1'])? $_POST['telefono1'] : 'null';
    $direccion = isset($_POST['direccion1'])? $_POST['direccion1'] : 'null';
    $colonia = isset($_POST['colonia1'])? $_POST['colonia1'] : 'null';
    $ciudad = isset($_POST['ciudad1'])? $_POST['ciudad1'] : 'null';
    $estado = isset($_POST['estado1'])? $_POST['estado1'] : 'null';
    $cp = isset($_POST['cp1'])? $_POST['cp1'] : 'null';
    $mail = isset($_POST['mail1'])? $_POST['mail1'] : 'null';
    $pass = isset($_POST['pass'])? $_POST['pass'] : 'null';
    
    if($user != 'null' && $pass != 'null'){
        $cuenta = new Cuenta;
        $sesion = $cuenta->iniciarSesion($user, $pass);
    }else if($nombre != 'null'){
        $cuenta = new Cuenta;
        $newCount = $cuenta->crearCuenta($nombre, $apellido, $telefono, $direccion, $colonia, $ciudad, $estado, $cp, $mail, $pass);
    }
?>

