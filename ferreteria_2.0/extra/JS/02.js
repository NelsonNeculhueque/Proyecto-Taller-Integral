function App() { }
window.onload = function(event) {
    var app = new App();
    window.app = app;
}
App.prototype.processingButton = function(event) {

    const btn = event.currentTarget;
    const carruselList = event.currentTarget.parentNode;
    const track = event.currentTarget.parentNode.querySelector('#track');
    const carrusel = track.querySelectorAll('.carrusel');
    
    const carruselWidth = carrusel[0].offsetWidth;

    const trackWidth = track.offsetWidth;
    const listwidth = carruselList.offsetWidth;

    track.style.left == "" ? leftPosition = track.style.left = 0 : leftPosition = parseFloat(track.style.left.slice(0,-2) *-1);
    btn.dataset.button == "button-prev" ? prevAction(leftPosition,carruselWidth, track) : nextAction(leftPosition, trackWidth, listwidth, carruselWidth, track);

}
function prevAction(leftPosition, carruselWidth, track) {
    if (leftPosition > 0) {
        track.style.left = `${-1 * (leftPosition - carruselWidth)}px`;

    }
}

function nextAction(carruselWidth, trackWidth, listwidth, carruselWidth, track){
    if (leftPosition < (trackWidth - listwidth)) {
        track.style.left = `${-1 * (leftPosition + carruselWidth)}px`;
    }
}


const buttonprev = document.getElementById("button-prev");
const buttonnext = document.getElementById("button-next");

buttonprev.addEventListener("click", function (event) {
    app.processingButton(event);
});

buttonnext.addEventListener("click", function (event) {
    app.processingButton(event);
});