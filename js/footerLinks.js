// Función para agregar y quitar la clase 'vibrar' cada 5 segundos
function toggleVibration() {
  var elemento = document.querySelector('.elemento');
  elemento.classList.add('vibrar');

  setTimeout(function() {
      elemento.classList.remove('vibrar');
  }, 600); // Duración de la animación en milisegundos
}

// Ejecutar la función cada 5 segundos
setInterval(toggleVibration, 5000);


const footerLinks = {
    redesSociales: {
      tienda: '../', // Reemplaza '#' con la URL correspondiente
        whatsapp: '#',
        facebook: '#',
        instagram: '#'
    },
    informacion: {
      direccion: '#', // Reemplaza '#' con la URL correspondiente
        whatsappNumero: '#',
        nosotros: '#',
        comoComprar: '#',
        preguntasFrecuentes: '#'
    }
};

    export default footerLinks;


