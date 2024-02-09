// -PLUGIN SLICK SLIDER: https://kenwheeler.github.io/slick/
$(document).ready(function () {
    $('.slideshow-container').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    //--------------------------------------------------------------------------------
    //--------------------------------------------------------------------------------
    //--------------------------------------------------------------------------------
    //--------------------------------------------------------------------------------
    var carouselContainer = document.querySelector('.slideshow-container');
    var products = carouselContainer.getElementsByClassName('product');

    Array.from(products).forEach(product => {
        product.addEventListener("click", (event) => {
            var modalBody = document.getElementById("modalBody");
            modalBody.innerHTML = `
            <div class="row">
            <div class="col">
                <img width="450" height="450" src="imagenes/top-ventas/BOFOHITLPLA00M3314.jpg">
            </div>
            <div class="col">
                <div class="summary-content">
                    <a href="producto?id=1">
                        <h1 class="product_title entry-title">TULPAC nº100</h1>
                    </a>
                    <p>
                        <span class="price"><span class="amount">1,29<span>€</span> – <span class="amount">1,42<span>€</span></span><small class="price-suffix"> IVA incluido</small>
                    </p>
                    <div class="product-description">
                        <p>Hilo de coser TULPAC</p>
                    </div>
                    <div class="product_meta">
                        <span>SKU: <span>BOFOHITLP</span></span>
                        <span>Categoría: <a href="hilos-de-coser" rel="tag">Hilos de coser</a></span>
                    </div>
        
                    <form class="form-cart" action="" method="post" enctype="multipart/form-data">
                        <label class="form-label label-color" for="pa_color">Color</label><span class="selected-variation-item-name"></span>
                        <div class="color-boxes">
                            <div class="color-box"><img src="imagenes/colores/Amarillo-Fluor-553.jpg" alt="Amarillo Flúor (553)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Azul-Royal-245.jpg" alt="Azul Royal (245)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Blanco-400.jpg" alt="Blanco (400)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Gris-Carbon-442.jpg" alt="Gris Carbón (442)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Gris-Cemento-435.jpg" alt="Gris Cemento (435)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Naranja-Fluor-564.jpg" alt="Naranja Flúor (564)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Negro-450.jpg" alt="Negro (450)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Rosa-Fluor-582.jpg" alt="Rosa Flúor (582)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Amarillo-Girasol-032.jpg" alt="Amarillo Girasol (032)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Amarillo-Limon-021.jpg" alt="Amarillo Limón (021)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Azul-Celeste-205.jpg" alt="Azul Celeste (205)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Azul-Marino-Orion-291.jpg" alt="Azul Marino Orión (291)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Azul-Tropical-228.jpg" alt="Azul Tropical (228)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Granate-Caoba-079.jpg" alt="Granate Caoba (079)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Naranja-Fiesta-054.jpg" alt="Naranja Fiesta (054)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Rojo-Loto-068.jpg" alt="Rojo Loto (068)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Rosa-Magenta-123.jpg" alt="Rosa Magenta (123)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Verde-Amazonas-341.jpg" alt="Verde Amazonas (341)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Verde-Manzana-314.jpg" alt="Verde Manzana (314)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Violeta-Berenjena-167.jpg" alt="Violeta Berenjena (167)"><span></span></div>
                            <div class="color-box"><img src="imagenes/colores/Violeta-Uva-158.jpg" alt="Violeta Uva (158)"><span></span></div>
                        </div>
        
        
                        <div class="single_variation_wrap">
                        <div class="variation single_variation" style="display: none;">
                        <div class="variation-description"></div>
                        <div class="variation-price"><span class="price"><span class="Price-amount amount"><bdi>1,38<span class="Price-currencySymbol">€</span></bdi></span> <small class="price-suffix">IVA incluido</small></span></div>
                        <div class="variation-availability">
                            <p class="ast-stock-detail">
                                <span class="ast-stock-avail">Disponibilidad:</span>
                                <span class="stock in-stock">260 disponibles</span>
                            </p>
                        </div>
                    </div>
                            <div class="variation-add-to-cart variations_button variation-add-to-cart-enabled">
        
                                <div class="quantity">
                                    <label class="form-label" for="quantity">Cantidad:</label>
                                    <input type="number" id="quantity" class="form-control input-quantity" name="quantity" value="1" aria-label="Cantidad de productos" size="4" min="1" max="39" step="1"autocomplete="off">
                                </div>
                                <div class="div-botones-modal">
                                <div class="button-container">
                                <button type="submit" class="btn button-basic">Añadir al carrito</button>
                                </div>
                                <div class="button-container">
                                <button type="button" class="btn button-fav">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"></path>
                                </svg>
                                </button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            `;
            $('#modalProduct').modal('show');

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
    });
});