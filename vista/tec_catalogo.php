<?php
    session_start();
    if( $_SESSION['us_tipo'] == 4 ) {
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tecnico</title>
    </head>
    <body>
        <h1>Hola Tecnico</h1>
        <a href="../controlador/Logout.php">Cerrar Sesión</a>
    </body>
</html>

<?php
    } else {
        header('Location: ../vista/login.php');
    }
?>