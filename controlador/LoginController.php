<?php 

    include_once '../modelo/Usuario.php';

    session_start();

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    echo "El DNI ingresado es : " . $user;
    echo "<br>";
    echo "El password ingresado es : " . $pass;

    $usuario = new Usuario();

    $usuario->loguearse($user, $pass);

    foreach($usuario->objetos as $objeto) {
        echo "<br>";
        echo "<pre>";
        print_r($objeto);
        echo "</pre>";

        echo "<br>";
        echo "<pre>";
        print_r("Id Usuario: " . $objeto->id_usuario);
        echo "<br>";
        print_r("Tipo Usuario: " . $objeto->nombre_tipo);
        echo "<br>";
        print_r("DNI: " . $objeto->dni_us);
        echo "<br>";
        print_r("Contraseña: " . $objeto->contrasena_us);
        echo "</pre>";
    } 

?>