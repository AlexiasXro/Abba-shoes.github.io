var slides = document.querySelectorAll('.text-carousel > .text-slide');
    var index = 0;

    function mostrarSiguienteSlide() {
        // Ocultar el slide actual
        slides[index].style.display = 'none';
        
        // Incrementar el índice y volver al inicio si llegamos al final
        index = (index + 1) % slides.length;

        // Mostrar el siguiente slide
        slides[index].style.display = 'block';
    }

    // Ocultar todos los slides excepto el primero
    for (var i = 1; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }

    // Mostrar un nuevo slide cada 3 segundos
    setInterval(mostrarSiguienteSlide, 3000);

//crea un carrusel de métodos de pago que muestra un
//nuevo método cada 3 segundos. Cada método de pago está
//representado por un "slide" dentro del contenedor .text-carousel. 
//El JavaScript oculta todos los slides excepto el primero al principio,
//y luego utiliza setInterval() para llamar a la función mostrarSiguienteSlide()
//cada 3 segundos, que se encarga de mostrar el siguiente slide y ocultar el actual.