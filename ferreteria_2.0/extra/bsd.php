<?php
// Conéctate a la base de datos
$conexion = mysqli_connect("localhost", "nelson", "Nelson_2005", "ferreteria virtual");

if (!$conexion) {
    die("La conexión falló: " . mysqli_connect_error());
}

// Consulta SQL para obtener los nombres de los productos de 'maquinariamotor'
$consulta_maquinariamotor = "SELECT nombre FROM maquinariamotor";
$resultado_maquinariamotor = mysqli_query($conexion, $consulta_maquinariamotor);

if (!$resultado_maquinariamotor) {
    die("La consulta de 'maquinariamotor' falló: " . mysqli_error($conexion));
}

// Consulta SQL para obtener los nombres de los productos de 'suplementos'
$consulta_suplementos = "SELECT nombre FROM suplementos";
$resultado_suplementos = mysqli_query($conexion, $consulta_suplementos);

if (!$resultado_suplementos) {
    die("La consulta de 'suplementos' falló: " . mysqli_error($conexion));
}

// Consulta SQL para obtener los nombres de los productos de 'implementoseg'
$consulta_implementoseg = "SELECT nombre FROM implementoseg";
$resultado_implementoseg = mysqli_query($conexion, $consulta_implementoseg);

if (!$resultado_implementoseg) {
    die("La consulta de 'implementoseg' falló: " . mysqli_error($conexion));
}

// Crear arreglos para almacenar los nombres de los productos de cada tabla
$nombres_maquinariamotor = array();
$nombres_suplementos = array();
$nombres_implementoseg = array();

while ($fila = mysqli_fetch_assoc($resultado_maquinariamotor)) {
    $nombres_maquinariamotor[] = $fila['nombre'];
}

while ($fila = mysqli_fetch_assoc($resultado_suplementos)) {
    $nombres_suplementos[] = $fila['nombre'];
}

while ($fila = mysqli_fetch_assoc($resultado_implementoseg)) {
    $nombres_implementoseg[] = $fila['nombre'];
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);

// Almacena los nombres de los productos en un arreglo asociativo
$nombres_productos = array(
    'maquinariamotor' => $nombres_maquinariamotor,
    'suplementos' => $nombres_suplementos,
    'implementoseg' => $nombres_implementoseg
);

// Imprime los nombres de los productos como una respuesta JSON
header('Content-Type: application/json');
echo json_encode($nombres_productos);
?>
