<?php
require_once 'includes/config.php';
require_once 'clases/AES.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico">

    <title>TULPAC nº100</title>
    <?php
    require_once 'includes/header.php';
    ?>
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=".">Home</a></li>
                <li class="breadcrumb-item"><a href="hilos-de-coser">Hilos de coser</a></li>
                <li class="breadcrumb-item active" aria-current="page">TULPAC nº100</li>
            </ol>
        </nav>
        <div class="primary">
            <main>
                <div class="article-single align-center row">
                    <div class="col">
                        <img src="imagenes/top-ventas/BOFOHITLPLA00M3314.jpg">
                    </div>

                    <div class="col">
                        <div class="summary-content">
                            <span class="single-product-category">
                                <a href="hilos-de-coser"> Hilos de coser</a>
                            </span>
                            <a href="producto?id=1">
                                <h1 class="product_title entry-title">TULPAC nº100</h1>
                            </a>
                            <p class="no-margin">
                                <span class="price"><span class="amount">1,29<span>€</span> – <span class="amount">1,42<span>€</span></span><small> IVA incluido</small>
                            </p>
                            <p class="product-details__short-description">Hilo de coser TULPAC</p>

                            <form class="form-cart" action="DAO/agregar-carrito.php" method="post" enctype="multipart/form-data">
                                <label class="form-label label-600" for="pa_color">Color<span class="selected-variation-item-name"></span></label>
                                <div class="color-boxes">
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Amarillo Flúor (553)">
                                        <img src="imagenes/colores/Amarillo-Fluor-553.jpg" alt="Amarillo Flúor (553)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Azul Royal (245)">
                                        <img src="imagenes/colores/Azul-Royal-245.jpg" alt="Azul Royal (245)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Blanco (400)">
                                        <img src="imagenes/colores/Blanco-400.jpg" alt="Blanco (400)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Gris Carbón (442)">
                                        <img src="imagenes/colores/Gris-Carbon-442.jpg" alt="Gris Carbón (442)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Gris Cemento (435)">
                                        <img src="imagenes/colores/Gris-Cemento-435.jpg" alt="Gris Cemento (435)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Naranja Flúor (564)">
                                        <img src="imagenes/colores/Naranja-Fluor-564.jpg" alt="Naranja Flúor (564)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Negro (450)">
                                        <img src="imagenes/colores/Negro-450.jpg" alt="Negro (450)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Rosa Flúor (582)">
                                        <img src="imagenes/colores/Rosa-Fluor-582.jpg" alt="Rosa Flúor (582)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Amarillo Girasol (032)">
                                        <img src="imagenes/colores/Amarillo-Girasol-032.jpg" alt="Amarillo Girasol (032)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Amarillo Limón (021)">
                                        <img src="imagenes/colores/Amarillo-Limon-021.jpg" alt="Amarillo Limón (021)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Azul Celeste (205)">
                                        <img src="imagenes/colores/Azul-Celeste-205.jpg" alt="Azul Celeste (205)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Azul Marino Orión (291)">
                                        <img src="imagenes/colores/Azul-Marino-Orion-291.jpg" alt="Azul Marino Orión (291)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Azul Tropical (228)">
                                        <img src="imagenes/colores/Azul-Tropical-228.jpg" alt="Azul Tropical (228)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Granate Caoba (079)">
                                        <img src="imagenes/colores/Granate-Caoba-079.jpg" alt="Granate Caoba (079)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Naranja Fiesta (054)">
                                        <img src="imagenes/colores/Naranja-Fiesta-054.jpg" alt="Naranja Fiesta (054)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Rojo Loto (068)">
                                        <img src="imagenes/colores/Rojo-Loto-068.jpg" alt="Rojo Loto (068)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Rosa Magenta (123)">
                                        <img src="imagenes/colores/Rosa-Magenta-123.jpg" alt="Rosa Magenta (123)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Verde Amazonas (341)">
                                        <img src="imagenes/colores/Verde-Amazonas-341.jpg" alt="Verde Amazonas (341)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Verde Manzana (314)">
                                        <img src="imagenes/colores/Verde-Manzana-314.jpg" alt="Verde Manzana (314)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Violeta Berenjena (167)">
                                        <img src="imagenes/colores/Violeta-Berenjena-167.jpg" alt="Violeta Berenjena (167)">
                                        <span></span>
                                    </div>
                                    <div class="color-box" data-bs-placement="top" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Violeta Uva (158)">
                                        <img src="imagenes/colores/Violeta-Uva-158.jpg" alt="Violeta Uva (158)">
                                        <span></span>
                                    </div>
                                </div>
                                <label class="form-label label-600" for="pa_color">Color<span class="selected-variation-item-name"></span></label>
                                <div>

                                </div>
                                <div class="single_variation_wrap">
                                    <div class="variation single_variation" style="display: none;">
                                        <div class="variation-description"></div>
                                        <div class="variation-price"><span class="price"><span class="amount">1,38<span>€</span></span> <small>IVA incluido</small></span></div>
                                        <div class="variation-availability">
                                            <p class="stock-detail">
                                                <span class="stock-avail">Disponibilidad:</span>
                                                <span class="stock in-stock">260 disponibles</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="variation-add-to-cart variations_button variation-add-to-cart-enabled">

                                        <div class="quantity">
                                            <label class="form-label" for="quantity">Cantidad:</label>
                                            <input type="number" id="quantity" class="form-control input-quantity" name="quantity" value="1" aria-label="Cantidad de productos" size="4" min="1" max="39" step="1" autocomplete="off">
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
                                <div class="product_meta">
                                    <span>SKU: <span>BOFOHITLP</span></span>
                                    <span>Categoría: <a href="hilos-de-coser" rel="tag">Hilos de coser</a></span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="panel-detalles-producto">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link producto active" id="descripcion-tab" data-bs-toggle="tab" href="#descripcion" role="tab" aria-controls="descripcion" aria-selected="true">Descripción</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link producto" id="informacion-tab" data-bs-toggle="tab" href="#informacion" role="tab" aria-controls="informacion" aria-selected="false">Información adicional</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane producto fade show active" id="descripcion" role="tabpanel" aria-labelledby="descripcion-tab">
                                <p>
                                    Hilo de coser de grosor fino / medio indicado principalmente para confeccionar tejido de gramaje fino entre 75 y 200 gr/m2<br>
                                    Estructura: 2 cabos<br>
                                    Composición: 100% poliéster<br>
                                    Hilatura: nº100<br>
                                    Formato mínimo: cono de 3000 metros<br>
                                    Caja: 120 conos (360000 metros)
                                </p>
                            </div>
                            <div class="tab-pane producto fade" id="informacion" role="tabpanel" aria-labelledby="informacion-tab">
                                <h2>Color</h2>
                                <p>Amarillo Flúor (553), Azul Royal (245), Blanco (400), Gris Carbón (442), Gris Cemento (435), Naranja Flúor (564), Negro (450), Rosa Flúor (582), Amarillo Girasol (032), Amarillo Limón (021), Azul Celeste (205), Azul Marino Orión (291), Azul Tropical (228), Granate Caoba (079), Naranja Fiesta (054), Rojo Loto (068), Rosa Magenta (123), Verde Amazonas (341), Verde Manzana (314), Violeta Berenjena (167), Violeta Uva (158)</p>

                            </div>
                        </div>
                    </div>
                    <section class="related products">
                        <h2>Productos relacionados</h2>
                        <ul class="row products">
                            <li class="col product">
                                <div class=""><a href="producto?id=1"><img src="imagenes/productos/BOFOHIRAYLA225C553.jpg"></a></div>
                                <div class="summary-wrap">
                                    <span class="product-category">
                                        Hilos de coser
                                    </span>
                                    <a href="producto?id=1" class="loop-product__link">
                                        <h3 class="product-title">RAYMOND nº150</h3>
                                    </a>
                                    <span class="price"><span class="amount">5,12<span>€</span></span> – <span class="amount">5,49<span>€</span></span>/cono <small>IVA incluido</small></span>
                                </div>
                            </li>
                            <li class="col product">
                                <div class=""><a href="producto?id=1"><img src="imagenes/productos/BOFOHICEALA00M3674.jpg"></a></div>
                                <div class="summary-wrap">
                                    <span class="product-category">
                                        Hilos de coser
                                    </span>
                                    <a href="producto?id=1" class="loop-product__link">
                                        <h3 class="product-title">CLEAR nº60</h3>
                                    </a>
                                    <span class="price"><span class="amount">3,45<span>€</span></span>/cono <small>IVA incluido</small></span>
                                </div>
                            </li>


                            <li class="col product">
                                <div class=""><a href="producto?id=1"><img src="imagenes/productos/BOFOHIROTLA0M45291.jpg"></a></div>
                                <div class="summary-wrap"> <span class="product-category">
                                        Hilos de coser </span>
                                    <a href="producto?id=1" class="loop-product__link">
                                        <h3 class="product-title">ROTER nº200</h3>
                                    </a>
                                    <span class="price"><span class="amount">2,43<span>€</span></span> – <span class="amount">2,48<span>€</span></span>/cono <small>IVA incluido</small></span>
                                </div>
                            </li>


                            <li class="col product">
                                <div class=""><a href="producto?id=1"><img src="imagenes/productos/BOFOHITENLA0M45291.jpg"></a></div>
                                <div class="summary-wrap"> <span class="product-category">
                                        Hilos de coser </span>
                                    <a href="producto?id=1" class="loop-product__link">
                                        <h3 class="product-title">TENA nº135</h3>
                                    </a>
                                    <span class="price"><span class="amount">2,12<span>€</span></span> – <span class="amount">2,34<span>€</span></span>/cono <small>IVA incluido</small></span>
                                </div>
                            </li>


                        </ul>

                    </section>
                </div>



        </div> <!-- .container -->
        </main> <!-- #main -->


    </div> <!-- #primary -->
    </div> <!-- container -->
    <?php
    require_once 'includes/footer.php';
    require_once 'includes/scripts.php';
    ?>