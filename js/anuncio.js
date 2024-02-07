var anuncios = document.querySelectorAll('.anuncio-H > div'); // Seleccionar todos los elementos de anuncio
    var index = 0;

    function mostrarSiguienteAnuncio() {
        // Ocultar el anuncio actual
        anuncios[index].style.display = 'none';
        
        // Incrementar el índice y volver al inicio si llegamos al final
        index = (index + 1) % anuncios.length;

        // Mostrar el siguiente anuncio
        anuncios[index].style.display = 'block';
    }

    // Ocultar todos los anuncios excepto el primero
    for (var i = 1; i < anuncios.length; i++) {
        anuncios[i].style.display = 'none';
    }

    // Mostrar un nuevo anuncio cada 3 segundos
    setInterval(mostrarSiguienteAnuncio, 3000);