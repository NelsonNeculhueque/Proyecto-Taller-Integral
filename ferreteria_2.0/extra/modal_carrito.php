<?php
session_start();
if (isset($_SESSION["carrito"])) {
    $carrito_mio=$_SESSION['carrito'];
    $total = 0;
    for ($i = 0; $i < count($carrito_mio); $i++) {
        if (isset($carrito_mio[$i])) {
            if ($carrito_mio[$i] != NULL) {
                echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';
                echo '<div class="row col-12">';
                echo '<div class="col-6 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad: ' . $carrito_mio[$i]["cantidad"] . ' : ' . $carrito_mio[$i]["titulo"] . '</h6></div>';
                echo '<div class="col-6 p-0" style="text-align: right; color: #000000;"><span class="text-muted" style="text-align: right; color: #000000;">' . $carrito_mio[$i]["precio"] * $carrito_mio[$i]["cantidad"] . ' $</span></div>';
                echo '</div>';
                echo '</li>';
                $total += ($carrito_mio[$i]["precio"] * $carrito_mio[$i]["cantidad"]);
            }
        }
    }
}
?>

<li class="list-group-item d-flex justify-content-between">
    <span style="text-align: left; color: #000000;">Total </span>
    <strong style="text-align: left; color: #000000;">
        <?php
        if (isset($_SESSION["carrito"])) {
            $total = 0;
            for ($i = 0; $i < count($carrito_mio); $i++) {
                if (isset($carrito_mio[$i]) && $carrito_mio[$i] != NULL) {
                    $total += ($carrito_mio[$i]["precio"] * $carrito_mio[$i]["cantidad"]);
                }
            }
        }
        if (!isset($total)) {
            $total = "0";
        } else {
            $total = $total;
        }
        echo $total . ' $';
        ?>
    </strong>
</li>
