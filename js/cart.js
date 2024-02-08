
document.addEventListener("DOMContentLoaded", function () {

    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })

    var modalBody = document.getElementById("modalBody");

    var products = document.querySelectorAll(".product");

    var colorBoxes = document.querySelectorAll(".color-box");

    products.forEach(product => {
        product.addEventListener("click", (event) => {
            var modalBody = document.getElementById("modalBody");
            modalBody.innerHTML = `
        <div class="row">
        <div class="col">
            <img width="450" height="450" src="imagenes/top-ventas/BOFOHITLPLA00M3314.jpg">
        </div>
        <div class="col">
            <div class="summary-content">
                <a href="">
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
                            <div class="button-container">
                            <button type="submit" class="btn button-basic">Añadir al carrito</button>
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

    // // Variables
    // const baseDeDatos = [
    //     {
    //         id: 1,
    //         nombre: 'Patata',
    //         precio: 1,
    //         imagen: 'patata.jpg'
    //     },
    //     {
    //         id: 2,
    //         nombre: 'Cebolla',
    //         precio: 1.2,
    //         imagen: 'cebolla.jpg'
    //     },
    //     {
    //         id: 3,
    //         nombre: 'Calabacin',
    //         precio: 2.1,
    //         imagen: 'calabacin.jpg'
    //     },
    //     {
    //         id: 4,
    //         nombre: 'Fresas',
    //         precio: 0.6,
    //         imagen: 'fresas.jpg'
    //     }

    // ];

    // let carrito = [];
    // const divisa = '€';
    // const DOMitems = document.querySelector('#items');
    // const DOMcarrito = document.querySelector('#carrito');
    // const DOMtotal = document.querySelector('#total');
    // const DOMbotonVaciar = document.querySelector('#boton-vaciar');

    // // Funciones

    // /**
    //  * Dibuja todos los productos a partir de la base de datos. No confundir con el carrito
    //  */
    // function renderizarProductos() {
    //     baseDeDatos.forEach((info) => {
    //         // Estructura
    //         const miNodo = document.createElement('div');
    //         miNodo.classList.add('card', 'col-sm-4');
    //         // Body
    //         const miNodoCardBody = document.createElement('div');
    //         miNodoCardBody.classList.add('card-body');
    //         // Titulo
    //         const miNodoTitle = document.createElement('h5');
    //         miNodoTitle.classList.add('card-title');
    //         miNodoTitle.textContent = info.nombre;
    //         // Imagen
    //         const miNodoImagen = document.createElement('img');
    //         miNodoImagen.classList.add('img-fluid');
    //         miNodoImagen.setAttribute('src', info.imagen);
    //         // Precio
    //         const miNodoPrecio = document.createElement('p');
    //         miNodoPrecio.classList.add('card-text');
    //         miNodoPrecio.textContent = `${info.precio}${divisa}`;
    //         // Boton
    //         const miNodoBoton = document.createElement('button');
    //         miNodoBoton.classList.add('btn', 'btn-primary');
    //         miNodoBoton.textContent = '+';
    //         miNodoBoton.setAttribute('marcador', info.id);
    //         miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);
    //         // Insertamos
    //         miNodoCardBody.appendChild(miNodoImagen);
    //         miNodoCardBody.appendChild(miNodoTitle);
    //         miNodoCardBody.appendChild(miNodoPrecio);
    //         miNodoCardBody.appendChild(miNodoBoton);
    //         miNodo.appendChild(miNodoCardBody);
    //         DOMitems.appendChild(miNodo);
    //     });
    // }

    // /**
    //  * Evento para añadir un producto al carrito de la compra
    //  */
    // function anyadirProductoAlCarrito(evento) {
    //     // Anyadimos el Nodo a nuestro carrito
    //     carrito.push(evento.target.getAttribute('marcador'))
    //     // Actualizamos el carrito
    //     renderizarCarrito();

    // }

    // /**
    //  * Dibuja todos los productos guardados en el carrito
    //  */
    // function renderizarCarrito() {
    //     // Vaciamos todo el html
    //     DOMcarrito.textContent = '';
    //     // Quitamos los duplicados
    //     const carritoSinDuplicados = [...new Set(carrito)];
    //     // Generamos los Nodos a partir de carrito
    //     carritoSinDuplicados.forEach((item) => {
    //         // Obtenemos el item que necesitamos de la variable base de datos
    //         const miItem = baseDeDatos.filter((itemBaseDatos) => {
    //             // ¿Coincide las id? Solo puede existir un caso
    //             return itemBaseDatos.id === parseInt(item);
    //         });
    //         // Cuenta el número de veces que se repite el producto
    //         const numeroUnidadesItem = carrito.reduce((total, itemId) => {
    //             // ¿Coincide las id? Incremento el contador, en caso contrario no mantengo
    //             return itemId === item ? total += 1 : total;
    //         }, 0);
    //         // Creamos el nodo del item del carrito
    //         const miNodo = document.createElement('li');
    //         miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
    //         miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0].nombre} - ${miItem[0].precio}${divisa}`;
    //         // Boton de borrar
    //         const miBoton = document.createElement('button');
    //         miBoton.classList.add('btn', 'btn-danger', 'mx-5');
    //         miBoton.textContent = 'X';
    //         miBoton.style.marginLeft = '1rem';
    //         miBoton.dataset.item = item;
    //         miBoton.addEventListener('click', borrarItemCarrito);
    //         // Mezclamos nodos
    //         miNodo.appendChild(miBoton);
    //         DOMcarrito.appendChild(miNodo);
    //     });
    //     // Renderizamos el precio total en el HTML
    //     DOMtotal.textContent = calcularTotal();
    // }

    // /**
    //  * Evento para borrar un elemento del carrito
    //  */
    // function borrarItemCarrito(evento) {
    //     // Obtenemos el producto ID que hay en el boton pulsado
    //     const id = evento.target.dataset.item;
    //     // Borramos todos los productos
    //     carrito = carrito.filter((carritoId) => {
    //         return carritoId !== id;
    //     });
    //     // volvemos a renderizar
    //     renderizarCarrito();
    // }

    // /**
    //  * Calcula el precio total teniendo en cuenta los productos repetidos
    //  */
    // function calcularTotal() {
    //     // Recorremos el array del carrito
    //     return carrito.reduce((total, item) => {
    //         // De cada elemento obtenemos su precio
    //         const miItem = baseDeDatos.filter((itemBaseDatos) => {
    //             return itemBaseDatos.id === parseInt(item);
    //         });
    //         // Los sumamos al total
    //         return total + miItem[0].precio;
    //     }, 0).toFixed(2);
    // }

    // /**
    //  * Varia el carrito y vuelve a dibujarlo
    //  */
    // function vaciarCarrito() {
    //     // Limpiamos los productos guardados
    //     carrito = [];
    //     // Renderizamos los cambios
    //     renderizarCarrito();
    // }

    // // Eventos
    // DOMbotonVaciar.addEventListener('click', vaciarCarrito);

    // // Inicio
    // renderizarProductos();
    // renderizarCarrito();
});