<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>URBANSHOP</title>
        <script src="https://kit.fontawesome.com/df59baf6b8.js"
            crossorigin="anonymous"></script>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
        <link rel="stylesheet" href="/css/productos.css">
        <link rel="stylesheet" href="/css/index.css">
        <script defer src="/js/stock.js"></script>
        <script defer src="/js/modal.js"></script>
        <script defer src="/js/app.js"></script>
    </head>

    <body>
    <div class="navegacion">
          <nav class="navegacion_menu">
            <a href="/view/index.php" class="navegacion_link">Inicio</a>
            <a href="/view/productos.php" class="navegacion_link">Carrito</a>
            <a href="/view/login.php" class="navegacion_link">Iniciar Sesión</a>
          </nav>
        </div>
        <header>
            <h1 id="titulo" class="titulo">URBANSHOES</h1>
            <button id="boton-carrito"><i class="fas fa-shoping-cart"></i><span
                    id="contadorCarrito">0</span></button>
        </header>

        <main id="contenedor-productos">
        </main>

        <div class="modal-contenedor">
            <div class="modal-carrito">
                <h3>Carrito</h3>
                <button id="carritoCerrar"><i class="fas fa-times-circle"></i></button>
                <div id="carrito-contenedor">
                    <!--
                        <div clas="productosEnCarrito">
                        <p>Buzo 1</p>
                        <p>Precio: $1200</p>
                        <button class="boton-eliminar"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    -->
                </div>
                <p class="precioProducto">Precio total: $ <span id="precioTotal">0</span></p>
                <button id="vaciar-carrito" class="boton-agregar">Vaciar carrito</button>
            </div>
        </div>
    </body>
</html>