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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos y Servicios</title>
    <meta name="robots" content="noindex">
    <link href="02.css" rel="stylesheet">
    <script defer src="01.js"></script>
    <script src="carrito.js"></script>

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
                    <div id="carrito-button" >
                            <i class="fas fa-shopping-cart" id="icon-search"></i> 
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
</body>