<?php
if (isset($_POST["subir"])) {
    include("conexion_2.php");

    $correo = ($_POST['email']);
    $contraseña = ($_POST['contraseña']);

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Error de conexion: " . $conn->connect_error);
    }
    $correo = $conn->real_escape_string($correo);
    $contraseña = $conn->real_escape_string($contraseña);


    $sql = "SELECT * FROM usuarios WHERE correo='$correo' AND contraseña='$contraseña'";

    $result = $conn->query($sql);

    if ($result->num_rows >= 1) {
        $registro = $result->fetch_assoc();
        session_start();
        $_SESSION['correo'] = "Hola!!! ". $registro['nombre'];
        echo "Bienvenido";
        header('Location: produyserv.php');
    } else {

    }



}
?>