<?php
include('sesiones.php');
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="03.css">
    <meta name="robots" content="noindex">
    <title>Contacto</title>
</head>

<body>
    <div class="header-content">
        <header>
            <h1 id="pri">Ferretería Bertuzzi</h1>
        
            <div id="menu">
                <ul class="MenInicio">
                    <li>
                        <a id="boton" href="login.php">Iniciar Sesion</a>
                    </li>
                    <li> <a href="home.php">Home</a></li>
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

            <script>
                var usuarioIniciado = <?php echo isset($_SESSION['correo']) ? 'true' : 'false'; ?>;
                var botonnn = document.getElementById("boton");
                
                if(usuarioIniciado){
                    botonnn.textContent = "Cerrar Sesion";
                    botonnn.href = "cerrar_sesion.php";
                }
            </script>
    </div>
    <main>
        <div class="container">
            <h2>Contacto</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre completo:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="mensaje">Opinión:</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>
                </div>
                
                <div>
                    <select name="selectContactForm" id="selectContactForm">
                        <option value="sugerencia">Sugerencia</option>
                        <option value="reclamo">Reclamo</option>
                        <option value="felicitaciones">Felicitaciones</option>
                        <option value="consulta">Consulta</option>
                    </select>
                </div> 
                <br>               
                <div class="form-group">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </main>


    <footer>
        <!-- Añadimos un pie de página con la etiqueta <footer> -->
        <p>Ferretería Bertuzzi SPA - Todos los derechos reservados © 2023</p>
    </footer>
    
</body>
</html>
