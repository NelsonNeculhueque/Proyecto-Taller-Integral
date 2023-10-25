document.addEventListener('DOMContentLoaded', function () {
    const $btnSignIn = document.querySelector('.sign-in-btn'),
        $btnSignUp = document.querySelector('.sign-up-btn'),
        $signUp = document.querySelector('.sign-up'),
        $signIn = document.querySelector('.sign-in');

    document.addEventListener('click', e => {
        if (e.target === $btnSignIn || e.target === $btnSignUp) {
            $signIn.classList.toggle('active');
            $signUp.classList.toggle('active')
        }
    });

    document.getElementById("icon-search").addEventListener("click", mostrar_buscador);
    document.getElementById("cover-ctn-search").addEventListener("click", ocultar_buscador);

    bars_search = document.getElementById("ctn-bars-search");
    cover_ctn_search = document.getElementById("cover-ctn-search");
    inputSearch = document.getElementById("inputSearch");
    box_search = document.getElementById("box-search");

    function mostrar_buscador() {
        bars_search.style.top = "80px";
        cover_ctn_search.style.display = "block";
        inputSearch.focus();
    }

    function ocultar_buscador() {
        bars_search.style.top = "-50px";
        cover_ctn_search.style.display = "none";
        inputSearch.value = "";
        box_search.style.display = "none"
    }

    document.getElementById("inputSearch").addEventListener("keyup", buscador_interno);

    function buscador_interno() {
        var filter = inputSearch.value.toUpperCase();
        var li = box_search.getElementsByTagName("li");

        for (var i = 0; i < li.length; i++) {
            var a = li[i].getElementsByTagName("a")[0];
            var textValue = a.textContent || a.innerText;

            if (textValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
                box_search.style.display = "block";
            } else {
                li[i].style.display = "none";
            }
        }
    }

    // Realizar una solicitud AJAX para obtener los nombres de las tablas desde PHP
    function obtenerNombresProductos() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var nombresTablas = JSON.parse(xhr.responseText);
                    var boxSearch = document.getElementById("box-search");

                    // Limpia el cuadro de búsqueda antes de agregar los nombres de las tablas
                    boxSearch.innerHTML = "";

                    nombresTablas.forEach(function (nombres_productos) {
                        var listItem = document.createElement("li");
                        listItem.innerHTML = `<a href="#">${nombres_productos}</a>`;
                        boxSearch.appendChild(listItem);
                    });

                    boxSearch.style.display = "block"; // Mostrar el cuadro de búsqueda
                } else {
                    console.error("Error en la solicitud AJAX: " + xhr.status);
                }
            }
        };

        // Configurar y enviar la solicitud AJAX al archivo PHP solo si hay un valor en la búsqueda
        var searchTerm = inputSearch.value.trim();
        if (searchTerm.length > 0) {
            xhr.open('GET', 'bsd.php', true);
            xhr.send();
        }
    }

    // Escuchar el evento "input" en el cuadro de búsqueda para obtener los nombres de productos
    inputSearch.addEventListener("input", obtenerNombresProductos);
});


//-------------------------

function MeteImagen2(img) {
    // Obten la imagen principal por su id
    var imagen = document.getElementById(img.id);

    // Cambia la imagen
    imagen.src = "img/numero-2.jpg";
}

function SacaImagen2(img) {
    // Obten la imagen principal por su id
    var imagen = document.getElementById(img.id);

    // Cambia la imagen
    imagen.src = "img/numero-1.jpg";
}

function MeteImagen(img) {
    // Obten la imagen principal por su id
    var imagen = document.getElementById(img.id);

    // Cambia la imagen
    imagen.src = "img/numero-2.jpg";
}

function SacaImagen(img) {
    // Obten la imagen principal por su id
    var imagen = document.getElementById(img.id);

    // Cambia la imagen
    imagen.src ="https://www-static-nw.husqvarna.com/-/images/aprimo/husqvarna/chainsaws/photos/studio/h110-0038.webp?v=2ab3cf2d23296e8&format=WEBP_LANDSCAPE_CONTAIN_XL";
}
function SacaImagen3(img) {
    // Obten la imagen principal por su id
    var imagen = document.getElementById(img.id);

    // Cambia la imagen
    imagen.src ="img/Aceite-Mezcla_500cc.jpg";
}
function MeteImagen1(img) {
    // Obten la imagen principal por su id
    var imagen = document.getElementById(img.id);

    // Cambia la imagen
    imagen.src = "img/numero-2.jpg";
}

function SacaImagen1(img) {
    // Obten la imagen principal por su id
    var imagen = document.getElementById(img.id);

    // Cambia la imagen
    imagen.src = "https://gardenmas.com/pub/media/catalog/product/cache/bc3a6cfac3aaa1129df63ddb4a7897e1/c/a/casco_spire_vent.png";
}