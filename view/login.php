<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <enlace rel="preconectar" href="https://fonts.googleapis.com">
        <enlace rel="preconectar" href="https://fonts.gstatic.com" crossorigin>
            <enlace href="https: //fonts.googleapis.com/css2? family= Oswald &
            display=swap" rel="hoja de estilo">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
                <link rel="stylesheet" href="/css/normalize.css">
                <link rel="stylesheet" href="/css/index.css">
                <link rel="stylesheet" href="/css/login.css">
</head>


<body>

<header class="header">
            <h1 class="header_heading">Mod Shoes<span class="header_bold">Tú
                tienda Online</head><h1></h1></span></h1>
        </header>
    <div class="navegacion">
        <nav class="navegacion_menu">
            <a href="/view/index.php" class="navegacion_link">Inicio</a>
            <a href="/view/productos.php" class="navegacion_link">Carrito</a>
            <a href="/view/login.php" class="navegacion_link">Iniciar Sesión</a> 
        </nav>
    </div>

    <body>
   
        <form action="procesar.php" class="form-box animated fadeInUp" method="post">
            <h1 class="form-title">SignIn</h1>
            <input for="nickname" name="nickname" type="text" placeholder="Usuario" autofocus>
            <input for="password" name="password"  type="password" placeholder="Password">
            <button type="submit">
                Login
            </button>
       

        <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == "Datos incorrectos") {
                echo "<h3>El usuario o contraseña no son correctos</h3>";
            }
            if ($error == "Datos vacios") {
                echo "<h3>Los campos envíados, se encuentran vacíos</h3>";
            }
        }
        ?>
        </form>
    </body>

    </html>