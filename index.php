<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda Deportiva</title>
    <link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Lobster" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/fonts.css">
</head>
<body>
    <div class="contenedor">
        <header>
            <div class="logo">
                <a href="#">SPORT-SHOP</a>
            </div>

            
            <a href="#" class="menu"><img src="./iconos/menu-de-lineas.png" alt="menu"></a>
            <div class="navbar menuOculto" id="navbar">
                <nav class="linksNav">
                    <a href="#"><span class="icon-home3"></span> Inicio</a>
                    <a href="#"><span class="icon-user"></span> Ingresar</a>
                    <a href="#"><span class="icon-list"></span> Categorias</a>
                    <a href="#"><span class="icon-address-book"></span> Contacto</a>
                    <a href="#"><span class="icon-cart"></span> Carro</a>
                </nav>
            </div>
        </header>


        <div class="contenido">

        </div>

        <footer>
            <div class="derechos">
                <p>Brian Esparza De La Torre - Todos los derechos reservados <?php echo date("Y"); ?> &copy;</p>
            </div>
            <div class="sociales">
                <a href="#"><img src="./iconos/facebook.png" alt="facebook"></a>
                <a href="#"><img src="./iconos/gorjeo.png" alt="tweeter"></a>
                <a href="#"><img src="./iconos/google-plus.png" alt="google-plus"></a>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".menu").click(function(){
                
                    $("#navbar").toggleClass("menuDesplegado");
                    $("#navbar").toggleClass("menuOculto");
                    $("#navbar").removeClass("navbar");               
            });
        });
    </script>
</body>
</html>