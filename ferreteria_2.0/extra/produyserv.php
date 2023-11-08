<?php
include('sesiones.php');
?>

<?php
// Requiere el archivo 'suplementos.php', que probablemente contiene la clase 'Database'
require 'suplementos.php';

// Crea una instancia de la clase 'Database' para interactuar con la base de datos
$db = new Database();

// Establece una conexión a la base de datos
$con = $db->conectar();

// Prepara y ejecuta una consulta SQL para seleccionar todos los registros de la tabla 'suplementos'
$sql = $con->prepare("SELECT * FROM suplementos");
$sql->execute();

// Obtiene todos los resultados de la consulta en un arreglo asociativo y los almacena en 'resultado1'
$resultado1 = $sql->fetchAll(PDO::FETCH_ASSOC);

// Prepara y ejecuta una consulta SQL similar para seleccionar todos los registros de la tabla 'maquinariamotor'
$sql = $con->prepare("SELECT * FROM maquinariamotor");
$sql->execute();

// Obtiene todos los resultados de la segunda consulta en un arreglo asociativo y los almacena en 'resultado2'
$resultado2 = $sql->fetchAll(PDO::FETCH_ASSOC);

// Prepara y ejecuta una consulta SQL para seleccionar todos los registros de la tabla 'implementoseg'
$sql = $con->prepare("SELECT * FROM implementoseg");
$sql->execute();

// Obtiene todos los resultados de la tercera consulta en un arreglo asociativo y los almacena en 'resultado3'
$resultado3 = $sql->fetchAll(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos y Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <meta name="robots" content="noindex">
    <link href="02.css" rel="stylesheet">
    <script defer src="01.js"></script>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<style>
    #seguridad, #Maquinas, #suplementos {
        display: none;
    }

    
</style>
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
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="cursor:pointer;" onclick="consultar_carrito()"><i class="fas fa-shopping-cart"></i> Mi Carrito</a>
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

        
        <div class="modal fade" id="modal_cart" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mi carrito</h5> <!-- Se corrigió el cierre de la etiqueta h5 -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Se corrigió el cierre de la etiqueta button -->
                </div>
                <div class="modal-body">
                  <div>
                    <div class="p-2">
                        <div id="mi_carrito"></div> <!-- Se corrigió el cierre de la etiqueta div -->
                    </div>
               </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> <!-- Se corrigió el cierre de la etiqueta button -->
        <a type="button" class="btn btn-primary" onclick="borrar_carrito();">Vaciar carrito</a> <!-- Se corrigió el cierre de la etiqueta a -->
      </div>
    </div>
  </div>
</div>

        <script>
                var usuarioIniciado = <?php echo isset($_SESSION['correo']) ? 'true' : 'false'; ?>;
                var botonnn = document.getElementById("boton");
                var divs = ["seguridad", "Maquinas", "suplementos"];
                
                if(usuarioIniciado){
                    botonnn.textContent = "Cerrar Sesion";
                    botonnn.href = "cerrar_sesion.php";
                }
                
                function mostrar_Seguridad(){
                    var div_s = document.getElementById("seguridad");
                    if(div_s.style.display === "none"){
                        div_s.style.display = "block"; 
                    } else{
                        div_s.style.display = "none";
                    }
                }
                function mostrar_Maquinaria(){
                    var div_m = document.getElementById("Maquinas");    
                    if(div_m.style.display === "none"){
                        div_m.style.display = "block"; 
                    } else{
                        div_m.style.display = "none";
                    }
                }
                function mostrar_Suplementos(){
                    var div_su = document.getElementById("suplementos");
                    if(div_su.style.display === "none"){
                        div_su.style.display = "block"; 
                    } else{
                        div_su.style.display = "none";
                    }
                }        

                function mostrarDiv(id) {
                    for (var i = 0; i < divs.length; i++) {
                        var div = document.getElementById(divs[i]);
                        if (divs[i] === id) {
                            div.style.display = "block";
                        } else {
                            div.style.display = "none";
                        }
                    }
                }
        </script>

    

<main>
    <br><br>
    <ul id="box-search"></ul>
    <div id="cover-ctn-search"> </div>


    <div class="contenedor">
        
                    <button id="security" onclick="mostrarDiv('seguridad')">
                        <h3>Seguridad</h3>
                         <img src="img\seguridad.png" alt=""class="bloque">   
                    </button>
                    <button id="maquina" onclick="mostrarDiv('Maquinas')">
                        <h3>Maquinas</h3>
                        <img src="img\maquinaria.png" alt=""class="bloque">
                    </button>
                    <button id="suple" onclick="mostrarDiv('suplementos')">
                        <h3>Suplementos</h3>
                        <img src="img\suplementos.png" alt=""class="bloque">
                    </button>
    </div>
    <section>
    <div id="seguridad">
        <br>
        <h2 class="venta">SEGURIDAD:</h2>
        <br>
        <div class="art">
            <!-- Comienza un bucle para recorrer el arreglo $resultado3 -->
            <?php foreach ($resultado3 as $SEG) { ?>
            
                <!-- Contenedor para cada elemento de seguridad -->
                <div class="product">
                    <!-- Muestra la imagen del implemento de seguridad -->
                    <td><img src="data:image/jpeg;base64,<?php echo base64_encode($SEG['Imagen']); ?>" class="imagen-seguridad"></td>

                    <!-- Muestra el tipo de implemento de seguridad -->
                    <h4><?php echo $SEG['Tipo_Implemento']; ?></h4>
                    <div class="car">
                         <button onclick="agregarAlCarro('implemento', '<?php echo $SEG['Tipo_Implemento']; ?>', '<?php echo $SEG['ID_Implemento']; ?>', <?php echo $SEG['Precio']; ?>)">Añadir al carro</button>
                    </div> <!-- Botón para añadir al carro -->
                    <br>

                    <!-- Muestra el precio del implemento de seguridad -->
                    <p>Precio: $<?php echo $SEG['Precio']; ?></p>
                    <br>
                </div>
            
            <?php } // Fin del bucle ?>
        </div>
    </div>

    <div id="Maquinas">
        <br>
        <h2 class="venta">MAQUINARIA:</h2><br>
        <div class="art">
            <?php foreach ($resultado2 as $MAQ) { ?>
            
                <?php
                $id = $MAQ['ID_Maquinaria'];
                ?>

                <div class="product">
                    <td><img src="data:image/jpeg;base64,<?php echo base64_encode($MAQ['Imagen']); ?>" class="imagen-suplemento"></td>
                    <h3><?php echo $MAQ['Tipo_Maquinaria']; ?></h3>
                    <p>Modelo: <?php echo $MAQ['Modelo']; ?></p>
                    <div class="car">
                    <button onclick="agregarAlCarro('maquinaria', '<?php echo $MAQ['Tipo_Maquinaria']; ?>', '<?php echo $MAQ['ID_Maquinaria']; ?>', <?php echo $MAQ['Precio']; ?>)">Añadir al carro</button>
                    </div>
                    <br>

                    <p>Precio: $<?php echo $MAQ['Precio']; ?></p>
                </div>
                <?php } ?>
        </div>
    </div>

    <div id="suplementos">
        <br>
        <h2 class="venta">SUPLEMENTOS:</h2><br>
        <div class="art">
            <?php foreach ($resultado1 as $SUP) { ?>
            <?php
            $id = $SUP['ID_Suplemento'];
            $imagen = "img/imagenes bd/suplemento " . $id . ".jpg";
            if (!file_exists($imagen)) {
                $imagen = "img/numero-1.jpg";
            }
            ?>
            
            <div class="product">
                <td><img src="data:image/jpeg;base64,<?php echo base64_encode($SUP['Imagen']); ?>" class="imagen-suplementos"></td>
                <h3><?php echo $SUP['Nombre_Suple']; ?></h3>
                <div class="car">
                    <button onclick="agregarAlCarro('suplementos', '<?php echo $SUP['Nombre_Suple']; ?>', '<?php echo $SUP['ID_Suplemento']; ?>', <?php echo $SUP['Precio']; ?>)">Añadir al carro</button>
                    </div>
                    <br>
                    <p>Precio: $<?php echo $SUP['Precio']; ?></p><br>
                </div>
                <?php } ?>
        </div>
    </div>
    <script type="text/javascript">
        function agregarAlCarro(nombreTabla, nombreProducto, idProducto, precio) {
            var ref = idProducto;
            var titulo = nombreProducto;
            var cantidad = 1;

            var producto = {
            ref: ref,
            titulo: titulo,
            precio: precio,
            cantidad: cantidad
        };

        fetch('cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(producto),
        })
        .then(response => response.json())
        .then(data => {
        // Maneja la respuesta (puede ser un mensaje de éxito, por ejemplo)
        Swal.fire('Hecho!', 'Se ha añadido exitosamente.', 'success');
    })
    .catch(error => {
        // Maneja cualquier error que ocurra durante la solicitud
        Swal.fire('Error!', 'Se ha producido un error.', 'error');
    });
    }
    function consultar_carrito() {
        fetch('modal_carrito.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({}), // Puedes enviar datos en el cuerpo de la solicitud si es necesario
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById("mi_carrito").innerHTML = data;
        })
    .   catch(error => {
            console.error('Error al obtener el contenido del carrito:', error);
        });
    }
    function borrar_carrito() {
        var parametros = {};

        fetch('borracarro.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(parametros), // Puedes enviar datos en el cuerpo de la solicitud si es necesario
        })
        .then(response => response.text())
        .then(data => {
            consultar_carrito(); // Llama a la función para obtener el contenido actualizado del carrito
        })
        .catch(error => {
            console.error('Error al borrar el carrito:', error);
        });
    }
   
</script>
</section>
    
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
                <div id="carrito" class="carrito-sidebar">
                    <div class="carrito-content">
                        <!-- Aquí mostrarás los productos en el carrito -->
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


    <script src="JS/02.js">     


    </script>
    </main>

    <footer>
        <!-- Añadimos un pie de página con la etiqueta <footer> -->
        <p>Ferretería Bertuzzi SPA - Todos los derechos reservados © 2023</p>
    </footer>

</body>


</html>

