<?php 

    include_once '../modelo/Usuario.php';

    session_start();

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    /* echo "El DNI ingresado es : " . $user;
    echo "<br>";
    echo "El password ingresado es : " . $pass; */

    /* $usuario = new Usuario(); */ 

    /* Si el dni y password se encuentran tabla Usuario, el atributo llamado objetos del objeto usuario 
    contendra un array con el registro que cumplio con la condición definida en la consulta. */
    
    /* $usuario->loguearse($user, $pass); */
    
    /* echo "<br>";
    echo "<pre>";
        print_r($usuario);
    echo "</pre>"; 
    foreach($usuario->objetos as $objeto) {

        echo "<br>";
        echo "<pre>";
        print_r($usuario->objetos);
        echo "</pre>";
        echo "<br>";
        echo "<pre>";
        print_r($objeto);
        echo "</pre>";

        echo "<br>";
        echo "<pre>";
        print_r("Id Usuario: " . $objeto->id_usuario);
        echo "<br>";
        print_r("Nombre Usuario: " . $objeto->nombre_us);
        echo "<br>";
        print_r("Apellidos Usuario: " . $objeto->apellidos_us);
        echo "<br>";
        print_r("Edad: " . $objeto->edad);
        echo "<br>";
        print_r("DNI: " . $objeto->dni_us);
        echo "<br>";
        print_r("Contraseña: " . $objeto->contrasena_us);
        echo "<br>";
        print_r("Tipo Usuario: " . $objeto->us_tipo);
        echo "<br>";
        print_r("Tipo Usuario: " . $objeto->nombre_tipo);
        echo "</pre>"; 
    } */

    /* Verificamos si ya existe una sesion, si es verdadero enrutamos directamente  y si no 
    existe una sesión hacemos la consulta y realizamos el proceso de enrutamiento. */

    if( $_SESSION['us_tipo'] ) {

        switch ($_SESSION['us_tipo']) {
            case 3:
                header('Location: ../vista/adm_catalogo.php');
                break;
            case 4:
                header('Location: ../vista/tec_catalogo.php');
                break;
            default:
                break;
        }

    } else {
        $usuario = new Usuario();
        $usuario->loguearse($user, $pass);

        /* Nota: Para este caso por el tipo de consulta, el array ya viene solo con un elemento */
        if(!empty($usuario->objetos)) { /* Pregunta si tiene elementos el array objetos  */
            /* Como tiene elementos el array objetos lo recorremos y obtenemos cada uno de sus 
            registros en la variable objeto */
            foreach($usuario->objetos as $objeto) {
                /* Creamos nuestras variables globales de sesión y asignamos sus valores. */
                /* Asigna a una variable de nombre usuario el
                valor del campo id_usuario tabla usuario que se encuentra en la BD. */
                $_SESSION['usuario'] = $objeto->id_usuario;
                $_SESSION['us_tipo'] = $objeto->us_tipo;
                $_SESSION['nombre_us'] = $objeto->nombre_us;
            }
    
            print_r("Usuario: " . $_SESSION['usuario']);
            print_r("Tipo de Usuario: " . $_SESSION['us_tipo']);
            print_r("Nombre Usuario: " . $_SESSION['nombre_us']);
    
            /* Ya que se borraron registros en mi tabla tipo_us, al ingresar de nuevo los dos 
            tipos de usuario, administrador y tecnico a cada uno se le asigno automaticamente 
            el valor de 3 para administrador y el valor de 4 para tecnico, considerando esta observación 
            en mi switch considerare estos casos. */
            switch ($_SESSION['us_tipo']) {
                case 3:
                    header('Location: ../vista/adm_catalogo.php');
                    break;
                case 4:
                    header('Location: ../vista/tec_catalogo.php');
                default:
                    break;
            }
        } else {
            header('Location: ../vista/login.php');
        }
    }/* else */

?>