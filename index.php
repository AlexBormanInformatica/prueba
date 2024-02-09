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

    <title>Tienda online de telas, tejidos y accesorios textiles</title>
    <?php
    require_once 'includes/header.php';
    ?>

    <div>
        <section class="top-section">
            <div class="background-overlay"></div>
            <div class="column-gap-default">
                <div class="col-100 top-column">
                    <div class="mb-20">
                        <h1 class="heading-title">¡Bienvenido a la tienda online de telas y fornituras textiles!</h1>
                    </div>
                    <section class="inner-section">
                        <div class="section-boxed">
                            <div class="inner-column col element-populated">
                                <div class="mb-20">
                                    <a href="/productos/tejidos/">
                                        <img alt="Telas y tejidos" decoding="async" data-srcset="" data-src="" src="imagenes/categorias/telas-y-tejidos.png" srcset="">
                                    </a>
                                </div>
                                <div class="mb-20">
                                    <h2 class="title-col">Telas y tejidos</h2>
                                </div>
                            </div>
                            <div class="inner-column col element-populated">
                                <div class="mb-20">
                                    <a href="/productos/tejidos/">
                                        <img alt="Fornituras textiles" decoding="async" data-srcset="" data-src="" src="imagenes/categorias/fornituras.png" srcset="">
                                    </a>
                                </div>
                                <div class="mb-20">
                                    <h2 class="title-col">Fornituras textiles</h2>
                                </div>
                            </div>
                            <div class="inner-column col element-populated">
                                <div class="mb-20">
                                    <a href="/productos/tejidos/">
                                        <img alt="Embalaje textil" decoding="async" data-srcset="" data-src="" src="imagenes/categorias/embalaje.png" srcset="">
                                    </a>
                                </div>
                                <div class="mb-20">
                                    <h2 class="title-col">Embalaje textil</h2>
                                </div>
                            </div>
                            <div class="inner-column col element-populated">
                                <div class="mb-20">
                                    <a href="/productos/tejidos/">
                                        <img alt="Etiquetaje" decoding="async" data-srcset="" data-src="" src="imagenes/categorias/etiquetas.png" srcset="">
                                    </a>
                                </div>
                                <div class="mb-20">
                                    <h2 class="title-col">Etiquetaje</h2>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="inner-section">
                        <div class="section-boxed">
                            <div class="inner-column col element-populated">
                                <div class="mb-20">
                                    <a href="/productos/tejidos/">
                                        <img alt="Herramientas textiles" decoding="async" data-srcset="" data-src="" src="imagenes/categorias/utillaje.png" srcset="">
                                    </a>
                                </div>
                                <div class="mb-20">
                                    <h2 class="title-col">Herramientas textiles</h2>
                                </div>
                            </div>
                            <div class="inner-column col element-populated">
                                <div class="mb-20">
                                    <a href="/productos/tejidos/">
                                        <img alt="Marcaje textil" decoding="async" data-srcset="" data-src="" src="imagenes/categorias/marcaje.png" srcset="">
                                    </a>
                                </div>
                                <div class="mb-20">
                                    <h2 class="title-col">Marcaje textil</h2>
                                </div>
                            </div>
                            <div class="inner-column col element-populated">
                                <div class="mb-20">
                                    <a href="/productos/tejidos/">
                                        <img alt="Maniquíes" decoding="async" data-srcset="" data-src="" src="imagenes/categorias/maniquies.png" srcset="">
                                    </a>
                                </div>
                                <div class="mb-20">
                                    <h2 class="title-col">Maniquíes</h2>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <!--PLUGIN SLICK SLIDER: https://kenwheeler.github.io/slick/-->
        <section class="section-carrusel">
            <div class="column-gap-default">
                <div>
                    <h2 class="heading-title">Telas y tejidos recomendadas</h2>
                </div>
                <div class="slideshow-container">
                    <div class="product">
                        <img src="imagenes/carrusel/BOTECADUNAN1500314.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Popelín </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">DUNCAN</h2>
                            </a>
                            <span class="price"><span class="amount">2,58<span>€</span></span> – <span class="amount">2,83<span>€</span></span>/m
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/carrusel/BOTECAMICAN1500245.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Sintético </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">MICHIGAN</h2>
                            </a>
                            <span class="price"><span class="amount">3,56<span>€</span></span> – <span class="amount">3,86<span>€</span></span>/m
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/carrusel/BOTECANEWAN1600412.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Sarga </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">NEW YOKR</h2>
                            </a>
                            <span class="price"><span class="amount">3,16<span>€</span></span> – <span class="amount">3,56<span>€</span></span>/m
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/carrusel/BOTECAPENAN1500473.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Impermeable </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">PEGASO NEW</h2>
                            </a>
                            <span class="price"><span class="amount">3,44<span>€</span></span> – <span class="amount">4,21<span>€</span></span>/m
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/carrusel/BOTECASEVAN1500336.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Sarga </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">SEVILLA</h2>
                            </a>
                            <span class="price"><span class="amount">2,80<span>€</span></span> – <span class="amount">3,10<span>€</span></span>/m
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/carrusel/BOTECASTFAN1500530.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Calada </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">STANFORD</h2>
                            </a>
                            <span class="price"><span class="amount">5,48<span>€</span></span>/m
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/carrusel/BOTECASWIAN1600400.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Sintético </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">SWING</h2>
                            </a>
                            <span class="price"><span class="amount">6,51<span>€</span></span>/m
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/carrusel/BOTEPUCHAAN1800068.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Calado </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">CHAMPION</h2>
                            </a>
                            <span class="price"><span class="amount">9,29<span>€</span></span> – <span class="amount">10,47<span>€</span></span>/kg
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/carrusel/BOTEPUMCYAN1800291.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Técnica punto elástico </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">MARACUYA</h2>
                            </a>
                            <span class="price"><span class="amount">30,33<span>€</span></span>/kg
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/carrusel/BOTEPUTCKAN1000353.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Felpa </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">TOKIO</h2>
                            </a>
                            <span class="price"><span class="amount">9,51<span>€</span></span> – <span class="amount">10,89<span>€</span></span>/kg
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/carrusel/BOTEPUTOUAN1600435.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Polar </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">TOUCH</h2>
                            </a>
                            <span class="price"><span class="amount">9,29<span>€</span></span> – <span class="amount">10,31<span>€</span></span>/kg
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/carrusel/BOTEPUTRUAN1500778.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Softshell </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">TRUCK</h2>
                            </a>
                            <span class="price"><span class="amount">9,74<span>€</span></span> – <span class="amount">10,51<span>€</span></span>/m
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-items-middle">
            <div class="background-overlay-middle"></div>
            <div class="column-gap-default gap-max-width">
                <div class="wrap-populated">
                    <div class="widget-heading">
                        <h2 class="heading-title color-white">¿Te gustaría saber todo lo que puedes fabricar y confeccionar con nuestros tejidos y fornituras?</h2>
                    </div>
                    <div class="widget-heading">
                        <h2 class="heading-title size-medium color-white">Nosotros te mostramos una serie de sectores textiles</h3>
                    </div>
                    <div class="widget-button">
                        <div class="button-container">
                            <a class="btn button-basic" href="" role="button">
                                <span class="button-text">DESCÚBRELOS</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--PLUGIN SLICK SLIDER: https://kenwheeler.github.io/slick/-->
        <section class="section-carrusel">
            <div class="column-gap-default">
                <div>
                    <h2 class="heading-title">Productos Top ventas</h2>
                </div>
                <div class="slideshow-container">
                    <div class="product">
                        <img src="imagenes/top-ventas/BOFOCNROK.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Cintas elásticas </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">ROKIDA</h2>
                            </a>
                            <span class="price"><span class="amount">0,06<span>€</span></span> – <span class="amount">0,34<span>€</span></span>/m
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/top-ventas/BOFOCNWEA.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Cintas rígidas </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">WEAT</h2>
                            </a>
                            <span class="price"><span class="amount">0,06<span>€</span></span> – <span class="amount">0,23<span>€</span></span>/m
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/top-ventas/BOFOBLTIS.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Bolsas de plástico </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">TIRSO</h2>
                            </a>
                            <span class="price"><span class="amount">0,04<span>€</span></span> – <span class="amount">0,25<span>€</span></span>/ud
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/top-ventas/BOFOCRKAD.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Cremalleras </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">KADUNA</h2>
                            </a>
                            <span class="price"><span class="amount">0,28<span>€</span></span> – <span class="amount">0,40<span>€</span></span>/ud
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/top-ventas/BOFOCNBAG.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Cintas rígidas </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">BAGGER</h2>
                            </a>
                            <span class="price"><span class="amount">0,12<span>€</span></span> – <span class="amount">0,38<span>€</span></span>/m
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/top-ventas/BOFOCUCPCLA0040245.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Cremalleras </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">COPACABANA</h2>
                            </a>
                            <span class="price"><span class="amount">0,10<span>€</span></span>/ud
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/top-ventas/BOFOCRMON.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Cremalleras </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">MONACO</h2>
                            </a>
                            <span class="price"><span class="amount">0,24<span>€</span> – <span class="amount">0,86<span>€</span></span>/ud
                                    <br><small class="price-suffix">IVA incluido</small>
                                </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/top-ventas/BOFOHIDRILA0M45021.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Hilos de coser </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">DRICON nº120</h2>
                            </a>
                            <span class="price"><span class="amount">2,02<span>€</span></span> – <span class="amount">2,23<span>€</span></span>/cono
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/top-ventas/BOFOHITLPLA00M3314.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Hilos de coser </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">TULPAC nº100</h2>
                            </a>
                            <span class="price"><span class="amount">1,29<span>€</span> – <span class="amount">1,42<span>€</span></span>/cono
                                    <br><small class="price-suffix">IVA incluido</small>
                                </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/top-ventas/BOFOCOBST.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                No elásticos </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">BRUSTER</h2>
                            </a>
                            <span class="price"><span class="amount">0,10<span>€</span></span> – <span class="amount">0,19<span>€</span></span>/par
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/top-ventas/BOFOHILMTXLA0M10079.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                Hilos de coser </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">MANTEX nº150</h2>
                            </a>
                            <span class="price"><span class="amount">2,35<span>€</span></span> – <span class="amount">3,12<span>€</span></span>/cono
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                    <div class="product">
                        <img src="imagenes/top-ventas/BOFOCOSVN.jpg" />
                        <div class="products-summary-wrap">
                            <span class="product-category">
                                No elásticos </span>
                            <a href="" class="product_link" tabindex="0">
                                <h2 class="product_title">SEVEN</h2>
                            </a>
                            <span class="price"><span class="amount">0,18<span>€</span></span>/m
                                <br><small class="price-suffix">IVA incluido</small>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="middle-section">
            <div class="column-gap-default gap-max-width">
                <div class="middle-top-column">
                    <div class="middle-wrap-populated">
                        <div class="widget-heading">
                            <div>
                                <h2 class="heading-title middle-title color-white size-large">Quiénes somos</h2>
                            </div>
                        </div>
                        <div class="widget-heading">
                            <div>
                                <p class="color-white text-middle-widget">Somos una empresa de la industria textil dedicada a la fabricación, almacenamiento y suministro de telas y fornituras. </p>
                            </div>
                        </div>
                        <div class="widget-button">
                            <div>
                                <div class="button-container">
                                    <a class="btn button-white size-sm" href="">
                                        <span class="button-content-wrapper">
                                            <span class="button-text">¡Conócenos!</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-tiendatelas">
            <div class="column-gap-default gap-max-width ">
                <div class="widget-heading">
                    <div>
                        <h2 class="heading-title-bottom">Tienda de telas y fornituras </h2>
                    </div>
                </div>
                <div>
                    <div class="widget-container">
                        <p>Bienvenido a la<strong> tienda online de telas y fornituras textiles.</strong><br>Somos la tienda de telas online en la que podrás encontrar<strong> telas, tejidos</strong> y muchos <strong>artículos de mercería.</strong> Disponemos de herramientas y accesorios de costura para que puedas realizar cualquier trabajo de costura. En nuestra tienda puedes comprar<strong> telas online desde casa por metros</strong> y disponemos de <strong>telas de punto, polares, telas elásticas, tejidos calada, acolchados, telas softshell, impermeables y muchos tejidos más.</strong><br>También puedes encontrar muchos artículos de mercería en nuestra mercería online como <strong>cremalleras, botones, hilos, vivos, cintas elásticas, cordones, ballenas, ollados, corchetes</strong> y accesorios para cinturones. <br>Tenemos todo lo necesario para que realices tus trabajos textiles. Además de disponer de todas las herramientas textiles que necesitas también encontrarás en nuestra tienda online de telas, el embalaje que necesitas para tus productos textiles. <strong>Bolsas de plástico, embalaje para camisas, cartulinas para plegar camisas, precintos, cajas de cartón</strong> y muchos más productos.<br>¿Qué otro tipo de productos puedes comprar en nuestra tienda online?<br><b>Herramientas textiles como agujas, metros, tijeras, cortahílos, cartulinas para patrones, troqueles y prensa para colocar los corchetes</b>. Marcajes textiles como retrorreflectantes, vinilos, papel sublimación y además disponemos de maniquíes.<br>Como verás en nuestra tienda online encontrarás todo lo que necesitas para la fabricación de tus productos textiles. Tanto como si eres particular , como si te dedicas a la fabricación de uniformes de trabajo, uniformes de colegio, fabricas ropa deportiva, bolsos , etc.. esta es tu tienda online de confianza&nbsp; y especializada donde encontrarás todos los productos textiles que necesitas.</p>
                        <p>Compra con la confianza que te ofrecemos , te garantizamos la mayor seguridad en compras con un pago seguro.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal agregar al carrito -->
        <div class="modal fade" id="modalProduct" tabindex="-1" role="dialog" aria-labelledby="modalProduct" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalBody">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once 'includes/footer.php';
    require_once 'includes/scripts.php';
    ?>