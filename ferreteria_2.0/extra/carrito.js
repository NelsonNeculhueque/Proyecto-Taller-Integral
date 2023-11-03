document.addEventListener('DOMContentLoaded', function() {
    const carritoSidebar = document.getElementById('carrito');
    const carritoButton = document.getElementById('carrito-button');

    function abrirCarrito() {
        carritoSidebar.style.right = '0';
    }

    function cerrarCarrito() {
        carritoSidebar.style.right = '-300px';
    }

    carritoButton.addEventListener('click', function () {
        if (parseInt(carritoSidebar.style.right) === 0) {
            cerrarCarrito();
        } else {
            abrirCarrito();
        }
    });
});