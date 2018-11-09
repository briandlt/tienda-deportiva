<?php

    #Constantes de Conexion

    define('DB_DSN', 'mysql:host=localhost; dbname=tienda_deportiva');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_CHARSET', 'SET CHARACTER SET utf8');

    #Rutas

    define('SERVER', 'http://localhost/deportiva-responsive/');
    define('RAIZ', $_SERVER['DOCUMENT_ROOT'].'/deportiva-responsive');
    define('CSS', SERVER.'css/');
    define('JS', SERVER.'js/');
    define('VIEWS', SERVER.'views/');
    define('CONTROLLERS', SERVER.'controllers/');
    define('MODELS', SERVER.'models/');

    #Autoload de mis clases

    include_once('core/autoload.php');
    include_once('vendor/autoload.php');
?>