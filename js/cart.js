
let popover;

document.addEventListener("DOMContentLoaded", function () {
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })

    obtenerDatosCarrito();
    popover = new bootstrap.Popover('#popover-carrito', {
        content: '',
        html: true
    })

    var colorBoxes = document.querySelectorAll(".color-box");
    var selectedColor = document.querySelector(".selected-variation-item-name");
    colorBoxes.forEach(colorBox => {
        colorBox.addEventListener("click", function () {
            colorBoxes.forEach(box => {
                box.classList.remove("active");
            });

            this.classList.add("active");

            var variationDiv = document.querySelector(".variation.single_variation");
            variationDiv.style.display = "block";

            const altText = this.querySelector("img").alt;
            selectedColor.textContent = ": " + altText;
        });
    });
});


function obtenerDatosCarrito() {
    $.ajax({
        url: '../DAO/obtener_datos_carrito.php',
        method: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.error) {
                console.error(response.error);
            } else {
                let popoverContent = '<div class="site-header-cart-data">';
                popoverContent += '<div class="shopping_cart"><div class="shopping_cart_content">';
                popoverContent += '<ul class="cart_list">';

                // Aquí deberías iterar sobre los productos en tu respuesta y construir el HTML para cada uno
                response.forEach(function (producto) {
                    popoverContent += '<li class="mini_cart_item">';
                    popoverContent += '<a href="" class="remove remove_from_cart_button" aria-label="Eliminar proucto del carrito"">';
                    popoverContent += '<img width="300" height="300" src="imagenes/top-ventas/BOFOHITLPLA00M3314.jpg" alt="proucto">';
                    popoverContent += 'TULPAC nº100';
                    popoverContent += '<span class="quantity">1 × <span class="Price-amount amount"><bdi>2,23<span class="Price-currencySymbol">€</span></bdi></span></span>';
                    popoverContent += '</li>';
                });

                popoverContent += '</ul>';
                popoverContent += '	<div class="button-container"><a href="cart" class="btn button-basic">Ver carrito</a></div>';
                popoverContent += '</div></div>';
                popoverContent += '</div>';

                popover = new bootstrap.Popover('#popover-carrito', {
                    content: popoverContent,
                    html: true
                })
            }
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}
