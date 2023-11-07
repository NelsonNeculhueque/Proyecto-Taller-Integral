<?php
include('sesiones.php');

if (isset($_SESSION['carrito'])) {
    $carrito_mio = $_SESSION['carrito'];
} else {
    $carrito_mio = array();
}

// Recibe los datos del producto en formato JSON (asumiendo que se envían así)
$data = json_decode(file_get_contents("php://input"));

if ($data) {
    $titulo = $data->titulo;
    $precio = $data->precio;
    $cantidad = $data->cantidad;
    $ref = $data->ref;

    $producto_existe = false;

    foreach ($carrito_mio as $key => $producto) {
        if ($ref == $producto['ref']) {
            $carrito_mio[$key]['cantidad'] += $cantidad;
            $producto_existe = true;
            break;
        }
    }

    if (!$producto_existe) {
        $nuevo_producto = array(
            "titulo" => $titulo,
            "precio" => $precio,
            "cantidad" => $cantidad,
            "ref" => $ref,
        );
        $carrito_mio[] = $nuevo_producto;
    }
}

if (isset($_POST['id']) && isset($_POST['cantidad'])) {
    $id = $_POST['id'];
    $cuantos = $_POST['cantidad'];

    if ($cuantos < 1) {
        unset($carrito_mio[$id]);
    } else {
        $carrito_mio[$id]['cantidad'] = $cuantos;
    }
}

if (isset($_POST['id2'])) {
    $id = $_POST['id2'];
    unset($carrito_mio[$id]);
}

$_SESSION['carrito'] = $carrito_mio;

// Calcular el total de productos en el carrito
$totalcantidad = 0;
foreach ($carrito_mio as $producto) {
    if (!is_null($producto)) {
        $totalcantidad += $producto['cantidad'];
    }
}

// Crear una respuesta JSON
$response = array(
    'status' => 'OK',
    'message' => 'Carrito actualizado correctamente',
    'totalcantidad' => $totalcantidad,
);

echo json_encode($response);
?>




