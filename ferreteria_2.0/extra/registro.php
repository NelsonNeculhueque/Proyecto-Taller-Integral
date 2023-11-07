<?php
session_start(); 

$conn = new mysqli('localhost', 'root', '', 'login2');
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

        $sqlrevisar = "SELECT * FROM `usuarios` WHERE rut = '$rut' AND nombre = '$nombre' AND apellido = '$apellido' AND correo = '$correo'";;
        $result = $conn->query($sqlrevisar);
        if ($result->num_rows > 0){
            $response = array('error' => 'Los datos proporcionados ya existen, Porfavor ingrese otros datos');
        }
        else{
            $sql = "INSERT INTO usuarios (rut, nombre, apellido, correo, contraseña) VALUES ('$rut', '$nombre', '$apellido', '$correo', '$contraseña')";
            if($conn->query($sql)){
                $response = array('success' => 'Registro exitoso');
            }
            else{
            $response = array('error' => 'Registro erroneo');
            }
        }
    } else {
        $response = array('error' => 'Faltan datos en la solicitud POST');
    }



}

header('Content-Type: application/json');
echo json_encode($response);
?>
