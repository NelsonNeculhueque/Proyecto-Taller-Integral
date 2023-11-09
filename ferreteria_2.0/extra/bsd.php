<?php
$conexion = mysqli_connect("localhost", "root", "", "ferreteriavirtual");

if (!$conexion) {
    die("La conexión falló: " . mysqli_connect_error());
}

$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$mensaje = $_POST['mensaje'];
$motivo = $_POST['motivo'];

$sql = "INSERT INTO Cliente (Rut, Nombre, Apellido, Correo, Direccion, mensaje, motivo) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);
if ($stmt) {
    $stmt->bind_param("issssss", $rut, $nombre, $apellido, $correo, $direccion, $mensaje, $motivo);

    if ($stmt->execute()) {
        session_start();
        $_SESSION['exito'] = true;
        header("Location: contacto.php");
        exit();
    } else {
        echo "Error al agregar el cliente: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error en la preparación de la consulta: " . $conexion->error;
}
?>
