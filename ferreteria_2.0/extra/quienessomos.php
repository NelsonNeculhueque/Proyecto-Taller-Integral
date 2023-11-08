<?php
include('sesiones.php');
?>


<!DOCTYPE html>
<html lang="es">
 <head>
     <title>Historia</title>
     <meta charset="UTF-8"> 
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="04.css">
     <meta name="robots" content="noindex">
     <script defer src="01.js"></script>
 </head>

 <body>
    <header>
    <h1 id="pri">Ferretería Bertuzzi</h1>

    <div id="menu">
                <ul class="MenInicio">
                    <li> <a href="login.php">Home</a></li>
                    <li> <a href="produyserv.php">Productos y Servicios</a></li>
                    <li> <a href="contacto.php">Contacto</a></li>
                    <li> <a href="quienessomos.php">Quienes somos</a>
                    </li>
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
    </header>
    
    <main>
    <h1 id="sec">Todo empezó con...</h1>

    <p id="historia">

        Entre los años 2000-2001 <b><i>Celso Bertuzzi Casanelli</i></b> en el patio de su casa empieza su pyme de taller
        de motosierras especializado en marca <a href="https://www.husqvarna.com/cl/"><i>Husqvarna</i></a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sem consectetur, viverra sem non, vulputate erat. Duis eu tellus justo. Quisque finibus risus et odio imperdiet tempus at nec ligula. Nunc eget tellus condimentum, porttitor libero aliquet, suscipit urna. Proin rhoncus mauris lacus, at efficitur enim ornare at. Nunc posuere, velit quis aliquam sagittis, urna mauris rhoncus odio, id bibendum nisi diam malesuada erat. Mauris eu massa justo. Mauris accumsan dui ac purus blandit, in tincidunt diam interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras consectetur venenatis tristique. Nulla facilisi. Nunc et quam sit amet ex porta blandit sed mollis odio.
    </p>

    <p id="historia">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut finibus non lacus vel mattis. Sed iaculis tempor leo. Integer convallis arcu dolor, id facilisis orci pretium ac. Sed suscipit facilisis ullamcorper. Pellentesque vitae nisl enim. In sit amet elit felis. Integer vitae leo est. Nullam vel ornare ex. Mauris consectetur nisi velit, vel facilisis arcu tristique sit amet. Suspendisse consectetur sapien eget efficitur feugiat. Aliquam et lectus nulla. Sed cursus, orci non tempus hendrerit, enim est maximus odio, sed fermentum mauris felis nec odio. Duis feugiat ut augue quis porttitor.
    </p>


    <h2 id ="sec">Equipo</h2>

    <div class="yo" >

        <img alt="Cambiar imagen"
        onmouseout= "SacaImagen(this)"
        onmouseover="MeteImagen(this)"
        src="img/equipo/Gianluca1.jpg" id="vacio" />
        <h4>Gianluca Alesandro Bertuzzi Toro</h4>
        <h5>
            <li>Representante de local, encargado de compra y jefe de caja.</li>
            <li>Cursando segundo semestre de Ingeniería Civil en Informática en la Universidad Católica de Temuco</li>
            <li>gbertuzzi2020@alu.uct.cl</li>
            <li>RUT. 20.617.914-7</li>
        </h5>
    </div>



    <div class="yo">
        <img alt="Cambiar imagen" height="200"
        onmouseout= "SacaImagen1(this)"
        onmouseover="MeteImagen1(this)"
        src="img/equipo/Nelson1.jpg" id="vacio1" />
        <h4>Nelson Abner Neculhueque Sepulveda</h4>
        <h5>
            <li>Representante de local, encargado de compra y jefe de caja.</li>
            <li>Cursando segundo semestre de Ingeniería Civil en Informática en la Universidad Católica de Temuco</li>
            <li>nneculhueque2023@alu.uct.cl</li>
            <li>RUT. 21.857.406-8</li>
        </h5>
    </div>


    <div class="yo">
        <img alt="Cambiar imagen" height="200"
        onmouseout= "SacaImagen2(this)"
        onmouseover="MeteImagen2(this)"
        src="img/equipo/Debora1.jpg" id="vacio2" />
        <h4>Débora Camila Vizama Infante</h4>
        <h5>
            <li>Representante de local, encargado de compra y jefe de caja.</li>
            <li>Cursando primer semestre de Ingeniería Civil en Informática en la Universidad Católica de Temuco</li>
            <li>dvizama2023@alu.uct.cl</li>
            <li>RUT. 12.345.678-9</li>
        </h5>
    </div>
    
    <div class="yo">
        <img alt="Cambiar imagen" height="200"
        onmouseout= "SacaImagen3(this)"
        onmouseover="MeteImagen3(this)"
        src="img/equipo/Javier1.jpg" id="vacio3" />
        <h4>Javier Benjamin Poblete Ibarra</h4>
        <h5>
            <li>Representante de local, encargado de compra y jefe de caja.</li>
            <li>Cursando segundo semestre de Ingeniería Civil en Informática en la Universidad Católica de Temuco</li>
            <li>javier.poblete2023@alu.uct.cl</li>
            <li>RUT. 12.345.678-9</li>
        </h5>
    </div>
    
    <div class="yo">
        <img alt="Cambiar imagen" height="200"
        onmouseout= "SacaImagen4(this)"
        onmouseover="MeteImagen4(this)"
        src="img/equipo/Abdiel1.jpg" id="vacio4" />
        <h4>Abdiel Antonio Molina Cifuentes</h4>
        <h5>
            <li>Representante de local, encargado de compra y jefe de caja.</li>
            <li>Cursando segundo semestre de Ingeniería Civil en Informática en la Universidad Católica de Temuco</li>
            <li>amolina2023@alu.uct.cl</li>
            <li>RUT. 21.641.482-9</li>
        </h5>
    </div>
    </main>
    <footer>
        <!-- Añadimos un pie de página con la etiqueta <footer> -->
        <p>Ferretería Bertuzzi SPA - Todos los derechos reservados © 2023</p>
    </footer>
</body>

</html>