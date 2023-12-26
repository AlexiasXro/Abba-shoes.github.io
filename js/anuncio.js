//carusel----------------------------------------
// Seleccionar todos los elementos con la clase "text-slide" y almacenarlos en la variable "slides".
const slides = document.querySelectorAll(".text-slide");
let currentIndex = 0;  // Inicializar la variable "currentIndex" con el valor 0 para rastrear la posición actual del slide.

// Función para mostrar un slide específico por su índice.
function showSlide(index) {
    slides.forEach((slide) => slide.classList.remove("active"));  // Eliminar la clase "active" de todos los elementos "text-slide".
    slides[index].classList.add("active");  // Agregar la clase "active" al elemento "text-slide" en la posición "index" para mostrarlo.
}

// Función para mostrar el próximo slide en la secuencia.
function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;  // Calcular el índice del próximo slide (circularmente).
    showSlide(currentIndex); // Llamar a la función "showSlide" para mostrar el próximo slide.
}

setInterval(nextSlide, 3000); // Cambiar de diapositiva cada 3 segundos
showSlide(currentIndex); // Mostrar la primera diapositiva inicialmente


//carruselS----------------imaGEN

const carrusel = document.querySelector('.carrusel');

  // Configura la duración de la transición en milisegundos
const transitionDuration = 5000; // Cambiar cada 5 segundos

let slideIndex = 0;

function cambiarImagen() {
    slideIndex = (slideIndex + 1) % carrusel.children.length;
    carrusel.style.transform = `translateX(-${slideIndex * 100}%)`;
}

// Función para agregar y quitar la clase 'vibrar' cada 5 segundos
function toggleVibration() {
  var elemento = document.querySelector('.elemento');
  elemento.classList.add('vibrar');

  setTimeout(function() {
      elemento.classList.remove('vibrar');
  }, 600); // Duración de la animación en milisegundos
}

// Ejecutar la función cada 5 segundos
setInterval(toggleVibration, 5000); // 5000 milisegundos = 5 segundos
