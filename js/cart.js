document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll('.card');
    let index = 0;

    setInterval(() => {
        cards[index].classList.remove('active');
        index = (index + 1) % cards.length;
        cards[index].classList.add('active');
    }, 5000); // Cambia el número (en milisegundos) para ajustar la duración entre cambios
});