<?php
// Conéctate a la base de datos
$conexion = mysqli_connect("localhost", "nelson", "Nelson_2005", "FerreteriaVirtual");

if (!$conexion) {
    die("La conexión falló: " . mysqli_connect_error());
}

// Consulta SQL para obtener los nombres de los productos de 'maquinariamotor'
$consulta_maquinariamotor = "SELECT Tipo_Maquinaria, Modelo FROM maquinariamotor";
$resultado_maquinariamotor = mysqli_query($conexion, $consulta_maquinariamotor);

if (!$resultado_maquinariamotor) {
    die("La consulta de 'maquinariamotor' falló: " . mysqli_error($conexion));
}

// Consulta SQL para obtener los nombres de los productos de 'suplementos'
$consulta_suplementos = "SELECT Nombre_Suple FROM suplementos";
$resultado_suplementos = mysqli_query($conexion, $consulta_suplementos);

if (!$resultado_suplementos) {
    die("La consulta de 'suplementos' falló: " . mysqli_error($conexion));
}

// Consulta SQL para obtener los nombres de los productos de 'implementoseg'
$consulta_implementoseg = "SELECT Tipo_Implemento FROM implementoseg";
$resultado_implementoseg = mysqli_query($conexion, $consulta_implementoseg);

if (!$resultado_implementoseg) {
    die("La consulta de 'implementoseg' falló: " . mysqli_error($conexion));
}

// Crear un arreglo para almacenar todos los nombres de productos
$nombres_productos = array();

while ($fila = mysqli_fetch_assoc($resultado_maquinariamotor)) {

    $nombre_completo = $fila['Tipo_Maquinaria'] . ' ' . $fila['Modelo'];
    $nombres_productos[] = $nombre_completo;
}

while ($fila = mysqli_fetch_assoc($resultado_suplementos)) {
    $nombres_productos[] = $fila['Nombre_Suple'];
}

while ($fila = mysqli_fetch_assoc($resultado_implementoseg)) {
    $nombres_productos[] = $fila['Tipo_Implemento'];
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);

// Imprime los nombres de los productos como una respuesta JSON
header('Content-Type: application/json');
echo json_encode($nombres_productos);
?>
