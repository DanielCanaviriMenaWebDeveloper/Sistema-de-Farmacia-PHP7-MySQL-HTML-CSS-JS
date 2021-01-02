
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Google Fonts - Poppins - Bold 700 -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
        <!-- CSS Font Awesone -->
        <link rel="stylesheet" href="../css/all.min.css">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/style.css">
        <title>Login</title>
    </head>
    <body>
        <img class="wave" src="../img/wave.png">
        <div class="contenedor">
            <div class="img">
                <img src="../img/bg.svg" alt="">
            </div><!-- img -->
            <div class="contenido-login">
                <form action="../controlador/LoginController.php" method="POST">
                    <img src="../img/logo.png" alt="">
                    <h2>Farmacia</h2>
                    <div class="input-div dni">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>DNI</h5>
                            <input class="input" type="text" name="user">
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Contraseña</h5>
                            <input class="input" type="password" name="pass">
                        </div>
                    </div>
                    <a href="">Created Warpieces</a>
                    <input class="btn" type="submit" value="Iniciar Sesión">
                </form>
            </div><!-- contenido-login -->
        </div>

        <script src="../js/login.js"></script>
    </body>
</html>

