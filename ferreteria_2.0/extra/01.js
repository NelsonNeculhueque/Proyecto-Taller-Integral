const $btnSignIn= document.querySelector('.sign-in-btn'),
      $btnSignUp= document.querySelector('.sign-up-btn'),
      $signUp = document.querySelector('.sign-up'),
      $signIn= document.querySelector('.sign-in');

      
document.addEventListener('click', e => {
    if (e.target === $btnSignIn || e.target === $btnSignUp){
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

function mostrar_buscador(){
    bars_search.style.top = "80px";
    cover_ctn_search.style.display = "block";
    inputSearch.focus();
}

function ocultar_buscador(){

    bars_search.style.top = "-10px";
    cover_ctn_search.style.display = "none";
    inputSearch.value = "";
    box_search.style.display = "none"
}


document.getElementById("inputSearch").addEventListener("keyup", buscador_interno)
function buscador_interno(){

    filter = inputSearch.value.toUpperCase();
    li = box_search.getElementsByTagName("li");

    for (i = 0; i < li.length; i++){
        a = li[i].getElementsByTagName("a")[0];
        textValue = a.textContent || a.innerText;

        if(textValue.toUpperCase().indexOf(filter) > -1){

            li[i].style.display = "";
            box_search.style.display = "block";
        }else{
            li[i].style.display = "none";
        }
    }
}
// Realizar una solicitud AJAX para obtener los nombres de las tablas desde PHP
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {

        var nombresTablas = JSON.parse(xhr.responseText);
        
        console.log(nombresTablas);
        
        var boxSearch = document.getElementById("box-search");
        nombresTablas.forEach(function (nombreTabla) {
            var listItem = document.createElement("li");
            listItem.innerHTML = `<a href="#">${nombreTabla}</a>`;
            boxSearch.appendChild(listItem);
        });
    }
};

xhr.open('GET', 'bsd.php', true); 
xhr.send();