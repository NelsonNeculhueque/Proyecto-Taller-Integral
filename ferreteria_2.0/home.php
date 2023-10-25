<!DOCTYPE html>
<html lang="es">
<head>
     <title>Ferretería Bertuzzi</title>
     <meta charset="UTF-8"> 
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="01.css" rel="stylesheet"> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <meta name="robots" content="noindex">
     <link rel="stylesheet" href="extra/01.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
     <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
     <script src="01.js"></script>
    
</head>


<!-- ____________________hola__________________________ -->
<body>           
    <header>
                    <h1 id="pri">Ferretería Bertuzzi</h1>
                
                    <div id="menu">
                        <ul class="MenInicio">
                            <li> <a  id="boton" href="login.php">Iniciar Sesion</a></li>
                            <li> <a href="home.php">Home</li></a>
                            <li> <a href="produyserv.php">Productos y Servicios</a></li>
                            <li> <a href="contacto.php">Contacto</a></li>
                            <li> <a href="quienessomos.php">Quienes somos</a>
                            </li>
                        </ul>
                    </div>
    </header>
    <main class="home">
    <section>
        <h1>Bienvenido a Ferreteria Bertuzzi!<br></h1>
        <h2>OFERTAS DEL MES!</h2>
            <img id="imagen1" src="https://www-static-nw.husqvarna.com/-/images/aprimo/husqvarna/garden-tractors/photos/studio/h310-2250.webp?v=7a7813db148fd9b9&format=WEBP_LANDSCAPE_CONTAIN_XXL" alt="" width="200px">
            <ul id="p1">
                <li>Precio = $ </li>
                <li>Tractor TS 138L</li>
            </ul>
               <img id ="imagen2" src="img/Fotos productos/motito.png" alt="" width="200px">
            <ul>
                <li>Precio = $ </li>
                <li>Motosierra HUSQVARNA 61</li>
            </ul>
                <img id="imagen3" src="https://gardenmas.com/pub/media/catalog/product/cache/bc3a6cfac3aaa1129df63ddb4a7897e1/c/a/casco_spire_vent.png" alt="" width="200px">
            <ul>
                <li>Precio = $ </li>
                <li>Casco SPIRE Vent</li>
            </ul>
    </section>
    

    <!-- barra lateral que muestra redes y autores de la p�gina web-->
    <aside>
        <h1>Nuestras redes</h1>
        <a href="https://www.instagram.com/ferreteriabertuzzi/?hl=es">
        <div class="border-icon">
             <i class='bx bxl-instagram'></i>
             
        </div>
        <span>ferreteriabertuzzi</span>
        </a>
        <a href="https://www.facebook.com/people/Grandes-Tiendas-Ferretería-Bertuzzi/100012910236910/?paipv=0&eav=AfYR1hD35d6et8fQohjbQfTQ4fqVBv3fGwzCnhxtZW5XP9bT74zGxvJPl32nBgFrXQg&_rdr">
        <div class="border-icon">
             <i class='bx bxl-facebook-square' ></i>
        </div>
        <span>Grandes Tiendas Ferreteria Bertuzzi</span>
        </a>
        <ul>
            <h1><br>Autores</h1>
            <li>Javier Poblete (Scrum Master)</li>
            <li>Gianluca Bertuzzi</li>
            <li>Debora Bizama</li>
            <li>Nelson Neculhueque</li>
            <li>Abdiel Molina</li>
        </ul>
        <img src="img/interior.jpeg" width="300px" >
        <img src="img/ferreteria completa.jpg" width="300px">
      </aside>
</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <footer>
        <!-- Añadimos un pie de página con la etiqueta <footer> -->
        <p>Ferretería Bertuzzi SPA - Todos los derechos reservados © 2023</p>
    </footer>

</body>
        
</html>