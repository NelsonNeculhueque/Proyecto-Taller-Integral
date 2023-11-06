<!DOCTYPE html>
<html lang="es">
<head>
     <title>Ferretería Bertuzzi</title>
     <meta charset="UTF-8"> 
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="robots" content="noindex">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
     <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
     <link rel="stylesheet" href="01.css">
     <script src="01.js"></script>
    </style>
</head>


<!-- ____________________hola__________________________ -->
<body background="img/fondo.gif">           
    <header>
                    <h1 id="pri">Ferretería Bertuzzi</h1>
                
                    <div id="menu">
                        <ul class="MenInicio">
                            <li> <a  id="boton" href="login.php">Iniciar Sesion</a></li>
                            <li> <a href="home.php">Home</a></li>
                            <li> <a href="produyserv.php">Productos y Servicios</a></li>
                            <li> <a href="contacto.php">Contacto</a></li>
                            <li> <a href="quienessomos.php">Quienes somos</a>
                            </li>
                        </ul>
                    </div>
    </header>
<main id="hero">   
    <div class="loginnn">
        <div class="container-form sign-up">
            <div class="welcome-back">
                <div class="message">
                    <h2>Bienvenido</h2>
                    <p>Si tienes ya una cuenta, inicie sesion</p>
                    <button class="sign-up-btn">Iniciar sesion</button>
                </div>
            </div>
            <form class="formulario">
                <h2 class="create-account">Crear Cuenta</h2>
                <div class="iconos">
                    <a href="https://www.instagram.com/ferreteriabertuzzi/?hl=es">
                    <div class="border-icon">
                        <i class='bx bxl-instagram'></i>
                    </div>
                    </a>
                    <a href="https://www.facebook.com/people/Grandes-Tiendas-Ferretería-Bertuzzi/100012910236910/?paipv=0&eav=AfYR1hD35d6et8fQohjbQfTQ4fqVBv3fGwzCnhxtZW5XP9bT74zGxvJPl32nBgFrXQg&_rdr">
                    <div class="border-icon">
                        <i class='bx bxl-facebook-square' ></i>
                    </div>
                    </a>
                </div>
                <form class="cuentaN" method="POST">
                    <p class="cuenta-gratis">Ingrese sus datos para mejorar nuestra atencion</p>
                    <input type="text" placeholder="rut" name="rut" id="ruti">
                    <input type="text" placeholder="nombre" name="nombre" id="nombreci">
                    <input type="text" placeholder="apellido" name="apellido" id="apellidi">
                    <input type="email" placeholder="correo" name="correo" id="email">
                    <input type="password" placeholder="contraseña" name="contraseña" id="contra">
                    <button type="submit" name="registro" id="keso">Registrarse</button>
                </form>
            </form>
        </div>
        <div class="sign-in">
            <form class="formulario" action="Inicio_sesion.php" method="POST">
                <h2 class="sign-up-btn">Iniciar Sesion</h2>
                <div class="iconos">
                    <a href="https://www.instagram.com/ferreteriabertuzzi/?hl=es">
                    <div>
                        <i class='bx bxl-instagram'></i>
                    </div>
                    </a>
                    <a href="https://www.facebook.com/people/Grandes-Tiendas-Ferretería-Bertuzzi/100012910236910/?paipv=0&eav=AfYR1hD35d6et8fQohjbQfTQ4fqVBv3fGwzCnhxtZW5XP9bT74zGxvJPl32nBgFrXQg&_rdr">
                    <div>
                        <i class='bx bxl-facebook-square' ></i>
                    </div>
                    </a>
                </div>
                <p class="cuenta-gratis"></p>
                <input type="email" name="email" id="email" placeholder="correo">
                <input type="password" name="contraseña" id="contraseña" placeholder="contraseña">
                <button type="submit" name="subir">Iniciar Sesion</button>
            </form>
            <div class="welcome-back">
                <div class="message">
                    <h2>Bienvenido de nuevo</h2>
                    <p>Si aun no tiene una cuenta registrese aca</p>
                    <button class="sign-in-btn">Registrarse</button>
                </div>
            </div>
        </div>

    </div>
</main>        
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const btn = document.getElementById("keso");
        btn.addEventListener("click", function(){
            event.preventDefault();
            const rut = document.getElementById("ruti").value;
            const nombre = document.getElementById("nombreci").value;
            const apellido = document.getElementById("apellidi").value;
            const correo = document.getElementById("email").value;
            const direccion = document.getElementById("contra").value;
            const nuevoform = new FormData();
            var detector_numeros = /^[0-9]+$/;
            var detector_correos = /@/
            nuevoform.append("rut", rut);
            nuevoform.append("nombre", nombre);
            nuevoform.append("apellido", apellido);
            nuevoform.append("correo", correo);
            nuevoform.append("contraseña", direccion);
            form = document.getElementById("keso");
            if(rut === "" || nombre === "" || apellido === "" || correo === "" || direccion === ""){
                alert("Error, Debe llenar todos los campos");
                return false
            }

            if(detector_numeros.test(rut)){
            }
            else{
                alert("Deben haber solo numeros en el campo RUT (sin guion ni puntos)");
                return false
            }
            if(detector_correos.test(correo)){
            }
            else{
                alert("Debe introducir un Correo Valido, recuerde usar @ y punto");
                return false
            }
            fetch('registro.php', {
                method: 'POST',
                body: nuevoform 
            })
            .then(response => {
                if(response.ok){
                    return response.json();
                }
                 else{
                    throw new Error("error");
                }})
                .then(data => {
                    if (data.error) {
                        alert(data.error);
                    } else if (data.success) {
                        alert("Registro exitoso");         
                        window.location.href = "produyserv.php";
                        }
                    })
                });
            });

            var usuarioIniciado = <?php echo isset($_SESSION['correo']) ? 'true' : 'false'; ?>;
            var botonnn = document.getElementById("boton");
            
            if(usuarioIniciado){
                botonnn.textContent = "Cerrar Sesion";
                botonnn.href = "cerrar_sesion.php";
        }
        

    </script>
    <footer>
        <p>Ferretería Bertuzzi SPA - Todos los derechos reservados © 2023</p>
    </footer>

</body>
        
</html>