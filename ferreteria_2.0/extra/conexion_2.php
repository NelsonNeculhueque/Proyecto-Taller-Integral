<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";


$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
    exit();
}

if ($conn->connect_error) {
    die("Error de conexi�n: " . $conn->connect_error);
} else {
    echo "Conexion exitosa";
}
?>