<?php
include('sesiones.php');
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos y Servicios</title>
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="02.css">
    <script defer src="01.js"></script>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="header-content">
            <h1 class="pri">Ferretería Bertuzzi</h1>
        
            <div id="menu">
                <ul class="MenInicio">
                    <li>
                        <a id="boton" href="login.php">Iniciar Sesion</a>
                    </li>
                    <li> <a href="home.php">Home</a></li>
                    <li> <a href="produyserv.php">Productos y Servicios</a></li>
                    <li> <a href="contacto.php">Contacto</a></li>
                    <li>
                        <a href="quienessomos.php">Quienes somos</a>
                    </li>
                    <div id="ctn-icon-search">
                        <i class="fas fa-search" id="icon-search"></i>
                    </div>
                    <div id="icon-menu">
                        <i class="fas fa-bars"></i>
                    </div>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <div>
                        <?php
                        if (!isset($_SESSION['correo'])) {
                            echo "<div><b>No has iniciado sesion</b></div>";
                        } else {
                            print_r($_SESSION['correo']);
                        }
                        ?>
                    </div>
                </ul>
            </div>
        
        <div id="ctn-bars-search">
            <input type="text" id="inputSearch" placeholder="Que desea Buscar?">
        </div>
        </div>
        </header>

        <script>
                var usuarioIniciado = <?php echo isset($_SESSION['correo']) ? 'true' : 'false'; ?>;
                var botonnn = document.getElementById("boton");
                
                if(usuarioIniciado){
                    botonnn.textContent = "Cerrar Sesion";
                    botonnn.href = "cerrar_sesion.php";
                }
        </script>

    

    <main>
        
<ul id="box-search"></ul>

<div id="cover-ctn-search"> </div>


    <div class="catalogo">
        <div class="categoria">
            <tr>      
                <td><h3>Seguridad</h3><br><a href="--">
                    <img alt="Cambiar imagen" height="200"
                    onmouseout= "SacaImagen1(this)"
                    onmouseover="MeteImagen1(this)"
                    src="https://gardenmas.com/pub/media/catalog/product/cache/bc3a6cfac3aaa1129df63ddb4a7897e1/c/a/casco_spire_vent.png" id="vacio" /> <br>
                    </a>
                </td>
            </tr>
        </div>
        <div class="categoria">
            <tr>    
                <td><h3>Maquinas</h3><br><a href="--">
                    <img alt="Cambiar imagen" height="200"
                    onmouseout= "SacaImagen(this)"
                    onmouseover="MeteImagen2(this)"
                    src="https://www-static-nw.husqvarna.com/-/images/aprimo/husqvarna/chainsaws/photos/studio/h110-0038.webp?v=2ab3cf2d23296e8&format=WEBP_LANDSCAPE_CONTAIN_XL" id="vacio1" /> <br>
                    </a>
                </td> 
            </tr>
        </div> 
        <div class="categoria">
            <tr>
                <td><h3>Suplementos</h3><br><a href="--">
                    <img alt="Cambiar imagen" height="200"
                    onmouseout= "SacaImagen3(this)"
                    onmouseover="MeteImagen2(this)"
                    src="img/Aceite-Mezcla_500cc.jpg" id="vacio2" /> <br>
                    </a>
                </td> 
            </tr>
        </div>
        
    </div>
    
    <div class="carousel">

        <h2 style="color: rgb(255, 255, 255); font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Mas de Nuestros Productos</h2>

        <div class="carrusel-list" id="carrusel-list">

            <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
                onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                    class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                    </path>
                </svg>
            </button>

            <div class="carrusel-track" id="track">

                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Tractor</small> TS 138L </h4>
                            <picture>
                                <img src="https://www-static-nw.husqvarna.com/-/images/aprimo/husqvarna/garden-tractors/photos/studio/h310-2250.webp?v=7a7813db148fd9b9&format=WEBP_LANDSCAPE_CONTAIN_XXL" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>
                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Casco</small> SPIRE Vent </h4>
                            <picture>
                                <img src="https://gardenmas.com/pub/media/catalog/product/cache/bc3a6cfac3aaa1129df63ddb4a7897e1/c/a/casco_spire_vent.png" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>

                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Motosierra</small> HUSQVARNA 61 </h4>
                            <picture>
                                <img src="https://www-static-nw.husqvarna.com/-/images/aprimo/husqvarna/chainsaws/photos/studio/h110-0038.webp?v=2ab3cf2d23296e8&format=WEBP_LANDSCAPE_CONTAIN_XL" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>

                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Cortacésped</small> Husqvarna LC 151 </h4>
                            <picture>
                                <img src="https://www-static-nw.husqvarna.com/-/images/aprimo/klippo/walk-behind-mowers/photos/studio/bt-287410.webp?v=4b29f77d148fd9b9&format=WEBP_LANDSCAPE_CONTAIN_XXL" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>

                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Desbrozadora</small> 520iRX </h4>
                            <picture>
                                <img src="img/Fotos productos/desbrosadora00.webp.png" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>


                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Juguete</small>  </h4>
                            <picture>
                                <img src="img/Fotos productos/motito.png" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>

                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Motobomba</small> HUSQVARNA W50P </h4>
                            <picture>
                                <img src="https://www-static-nw.husqvarna.com/-/images/aprimo/husqvarna/water-pumps/photos/studio/h810-0907.webp?v=5958396e148fd9b9&format=WEBP_LANDSCAPE_CONTAIN_XXL" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>


                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Motocultivador</small> HUSQVARNA TF 545DE </h4>
                            <picture>
                                <img src="https://www-static-nw.husqvarna.com/-/images/aprimo/husqvarna/cultivators-and-tillers/photos/studio/h510-0432.webp?v=2fbc31fc148fd9b9&format=WEBP_LANDSCAPE_CONTAIN_XXL" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>


                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Motobomba</small> HUSQVARNA W40P </h4>
                            <picture>
                                <img src="https://www-static-nw.husqvarna.com/-/images/aprimo/husqvarna/water-pumps/photos/studio/h810-0906.webp?v=6e437996148fd9b9&format=WEBP_LANDSCAPE_CONTAIN_XXL" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>

                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Robots cortacésped profesionales</small> HUSQVARNA AUTOMOWER® 550 </h4>
                            <picture>
                                <img src="https://www-static-nw.husqvarna.com/-/images/aprimo/husqvarna/robotic-mowers/photos/studio/h310-1612.webp?v=9837a4c2148fd9b9&format=WEBP_LANDSCAPE_CONTAIN_XXL" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>


                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Cortasetos</small> HUSQVARNA 122HD60 </h4>
                            <picture>
                                <img src="https://www-static-nw.husqvarna.com/-/images/aprimo/husqvarna/hedge-trimmers/photos/studio/h210-0299.webp?v=1e28574f148fd9b9&format=WEBP_LANDSCAPE_CONTAIN_XXL" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>


                <div class="carrusel">

                    <div>

                        <a href="/">
                            <h4> <small>Casco</small> SPIRE Vent </h4>
                            <picture>
                                <img src="https://gardenmas.com/pub/media/catalog/product/cache/bc3a6cfac3aaa1129df63ddb4a7897e1/c/a/casco_spire_vent.png" alt="imagen">
                            </picture>
                        </a>

                    </div>

                </div>


                

            </div>

            <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
                onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                    class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                    </path>
                </svg>
            </button>


        </div>

    </div>


    <script src="JS/02.js" ></script>
    </main>

    <footer>
        <!-- Añadimos un pie de página con la etiqueta <footer> -->
        <p>Ferretería Bertuzzi SPA - Todos los derechos reservados © 2023</p>
    </footer>

</body>


</html>

