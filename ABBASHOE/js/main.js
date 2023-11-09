// Función principal que encapsula todo el código
document.addEventListener('DOMContentLoaded', function () {

    // Variables globales al principio del script
    const cartIcon = document.querySelector('#cart-icon');
    const cart = document.querySelector('.cart');
    const closeCart = document.querySelector('#close-cart');

    // Abre el carrito
    cartIcon.onclick = () => {
        cart.classList.add('active');
    };

    // Cierra el carrito
    closeCart.onclick = () => {
        cart.classList.remove('active');
    };

    // Función para actualizar el total
    function updateTotal() {
        const cartContent = document.querySelector('.cart-content');
        const cartBoxes = cartContent.getElementsByClassName('cart-box');
        let total = 0;

        for (let i = 0; i < cartBoxes.length; i++) {
            const cartBox = cartBoxes[i];
            const priceElement = cartBox.getElementsByClassName('cart-price')[0];
            const quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
            const price = parseFloat(priceElement.innerText.replace("$", ""));
            const quantity = quantityElement.value;
            total += price * quantity;
        }

        // Redondea el total a dos decimales
        total = Math.round(total * 100) / 100;

        document.querySelector('.total-price').innerText = '$' + total;
    }

    // Función para manejar el botón de compra
    function buyButtonClicked() {
        alert('Su pedido está realizado');
        const cartContent = document.querySelector('.cart-content');
        while (cartContent.hasChildNodes()) {
            cartContent.removeChild(cartContent.firstChild);
        }
        updateTotal();
    }

    // Función para eliminar elementos del carrito
    function removeCartItem(event) {
        const buttonClicked = event.target;
        buttonClicked.parentElement.remove();
        updateTotal();
    }

    // Función para cambiar la cantidad
    function quantityChanged(event) {
        const input = event.target;
        if (isNaN(input.value) || input.value <= 0) {
            input.value = 1;
        }
        updateTotal();
    }

    // Función para agregar un producto al carrito
    function addProductToCart(title, price, productImg) {
        const cartShopBox = document.createElement("div");
        cartShopBox.classList.add('cart-box');

        const cartItems = document.querySelector('.cart-content');
        const cartItemsName = cartItems.getElementsByClassName('cart-product-title');
        for (let i = 0; i < cartItemsName.length; i++) {
            if (cartItemsName[i].textContent === title) {
                alert("Ya ha añadido este artículo al carrito");
                return;
            }
        }

        const cartBoxContent = `<img src='${productImg}' alt="" class="cart-img">
                                <div class="detail-box">
                                    <div class="cart-product-title">${title}</div>
                                    <div class="cart-price">${price}</div>
                                    <input type="number" value="1" class="cart-quantity">
                                </div>
                                <!-- Remover Cart-->
                                <i class="bx bxs-trash-alt cart-remove"></i>`;

        cartShopBox.innerHTML = cartBoxContent;
        cartItems.append(cartShopBox);

        cartShopBox
            .getElementsByClassName('cart-remove')[0]
            .addEventListener('click', removeCartItem);

        cartShopBox
            .getElementsByClassName("cart-quantity")[0]
            .addEventListener("change", quantityChanged);

        updateTotal();
    }

    // Asociar el botón de compra con su función correspondiente
    document
        .querySelector(".btn-buy")
        .addEventListener("click", buyButtonClicked);

    // Asociar botones de agregar al carrito con su función correspondiente
    const addCartButtons = document.getElementsByClassName("add-cart");
    for (let i = 0; i < addCartButtons.length; i++) {
        addCartButtons[i].addEventListener("click", function () {
            const button = event.target;
            const shopProducts = button.parentElement;
            const title = shopProducts.getElementsByClassName('product-title')[0].innerText;
            const price = shopProducts.getElementsByClassName('price')[0].innerText;
            const productImg = shopProducts.getElementsByClassName('product-img')[0].src;
            addProductToCart(title, price, productImg);
        });
    }

});


// Obtén el elemento de video
var video = document.getElementById("miVideo");

// Función para reiniciar la reproducción después de 2 minutos
function reiniciarVideo() {
    video.play();
}

// Agrega un evento "ended" que se ejecutará cuando el video termine
video.addEventListener("ended", function() {
    // Espera 2 minutos (en milisegundos) antes de volver a reproducir el video
    setTimeout(reiniciarVideo, 120000); // 120000 milisegundos = 2 minutos
});

//BUSQUEDA
document.getElementById("btn-busqueda").addEventListener("click", function() {
    var query = document.getElementById("busqueda").value;
    // Realiza aquí la acción de búsqueda con la variable 'query'
  });