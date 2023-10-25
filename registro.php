<?php
session_start(); 

$conn = new mysqli('localhost', 'root', '', 'login');
$response = array();

if ($conn->connect_error) {
    $response = array('error' => 'Error de conexion: ');
} else {
    if (isset($_POST["rut"]) && isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["correo"]) && isset($_POST["contraseña"])) {
        $rut = ($_POST["rut"]);
        $nombre = ($_POST["nombre"]);
        $apellido = ($_POST["apellido"]);
        $correo = ($_POST["correo"]);
        $contraseña = ($_POST["contraseña"]);

        $sql = "INSERT INTO usuarios (rut, nombre, apellido, correo, contraseña) VALUES ('$rut', '$nombre', '$apellido', '$correo', '$contraseña')";

        if ($conn->query($sql)) {
  

            $response = array('success' => 'Registro exitoso');
        } else {
            $response = array('error' => 'Error: ' . $conn->error);
        }
    } else {
        $response = array('error' => 'Faltan datos en la solicitud POST');
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>
