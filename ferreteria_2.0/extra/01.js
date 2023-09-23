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

function App() {}

window.onload = function () {
  var app = new App();
  window.app = app;
};

App.prototype.processingButton = function (event) {
  const btn = event.currentTarget;
  const carruselList = event.currentTarget.parentNode;
  const track = carruselList.querySelector('#track'); // Cambiado de event.currentTarget.parentNode a carruselList
  const carrusel = track.querySelectorAll('.carrusel');

  const carruselWidth = carrusel[0].offsetWidth;
  const trackWidth = track.offsetWidth;
  const listWidth = carruselList.offsetWidth; // Cambiado de listwidth a listWidth

  // Declarar leftPosition antes de usarlo
  let leftPosition = parseFloat(track.style.left || '0'); // Si track.style.left no está definido, se establece en 0

  if (btn.dataset.button === 'button-prev') {
    prevAction(leftPosition, carruselWidth, track);
  } else {
    nextAction(leftPosition, carruselWidth, trackWidth, listWidth, track);
  }
};

let prevAction = (leftPosition, carruselWidth, track) => {
  if (leftPosition > 0) {
    track.style.left = `${-1 * (leftPosition - carruselWidth)}px`;
  }
};

let nextAction = (leftPosition, carruselWidth, trackWidth, listWidth, track) => {
  if (leftPosition < (trackWidth - listWidth)) {
    track.style.left = `${-1 * (leftPosition + carruselWidth)}px`;
  }
};

const buttonprev = document.getElementById("button-prev");
const buttonnext = document.getElementById("button-next");

buttonprev.addEventListener("click", function(event) {
    app.processingButton(event);
});

buttonnext.addEventListener("click", function(event) {
    app.processingButton(event);
});