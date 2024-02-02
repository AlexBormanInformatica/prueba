<?php
require_once 'includes/config.php';
require_once 'clases/AES.php';
require_once 'includes/header.php';
?>

<div>
    <article>
        <section class="section-items-middle">
            <div class="background-overlay-sectores"></div>
            <div class="column-gap-default gap-max-width">
                <div class="wrap-populated">
                    <div class="widget-heading">
                        <h1 class="heading-title-sectores-size1 color-white">SECTORES TEXTILES</h1>
                    </div>
                </div>
                <div class="widget-divider">
                    <div class="qs-divider">
                        <span class="divider-separator">
                        </span>
                    </div>
                </div>
                <div class="widget-heading">
                    <div class="widget-container">
                        <h2 class="heading-title-sectores-size2 color-white">Aquí puedes encontrar nuestros <strong>tejidos y fornituras </strong> según lo que quieras confeccionar.</h2>
                    </div>
                </div>
                <div class="widget-heading">
                    <div class="widget-container">
                        <h3 class="heading-title-sectores-size3 color-white">Encuentra todo el material que necesitas en Borman Textil para hacer realidad tus proyectos textiles.</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-20 mb-20">
            <div class="column-gap-default gap-max-width flex">
                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/camisetas/">
                                <img width="120" height="120" alt="Camiseta Mlarga" src="imagenes/sectores/Camiseta-mlarga.jpg" class="animation-grow">
                                <span class="image-caption">Camisetas</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/camisetas-mujer/">
                                <img width="120" height="120" alt="Camiseta Mujer" src="imagenes/sectores/Camiseta-Mujer.jpg" class="animation-grow">
                                <span class="image-caption">Camisetas mujer</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">

                            <a class="image-link" href="/sectores/polos/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Cuello-Polo.jpg" class="animation-grow">
                                <span class="image-caption">Polos</span>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/sudaderas/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Sudaderas.jpg" class="animation-grow">
                                <span class="image-caption">Sudaderas</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="mt-20 mb-20">
            <div class="column-gap-default gap-max-width flex">
                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/forro-polar/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Forro-polar.jpg" class="animation-grow">
                                <span class="image-caption">Forro polar</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/softshell/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Chaqueta-Softshell.jpg" class="animation-grow">
                                <span class="image-caption">Softshell</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/futbol/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Equipaciones-Deportivas.jpg" class="animation-grow">
                                <span class="image-caption">Equipación fútbol</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/baloncesto/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Equipaciones-Deportivas.jpg" class="animation-grow">
                                <span class="image-caption">Equipación baloncesto</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-20 mb-20">
            <div class="column-gap-default gap-max-width flex">
                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/maillot-ciclismo/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Maillot-Ciclismo.jpg" class="animation-grow">
                                <span class="image-caption">Maillot ciclismo</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/culote-ciclismo/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Culote-Ciclismo.jpg" class="animation-grow">
                                <span class="image-caption">Culote cilismo</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/gimnasia-ritmica/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Gimnasia-Ritmica.jpg" class="animation-grow">
                                <span class="image-caption">Gimnasia rítmica</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/chandal/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Chandal.jpg" class="animation-grow">
                                <span class="image-caption">Chándal</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-20 mb-20">
            <div class="column-gap-default gap-max-width flex">
                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/abrigos/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Abrigo.jpg" class="animation-grow">
                                <span class="image-caption">Abrigos</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/ropa-lluvia/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Chubasquero.jpg" class="animation-grow">
                                <span class="image-caption">Ropa de lluvia</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/pantalon-trekking/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Pantalon-montana.jpg" class="animation-grow">
                                <span class="image-caption">Pantalón de trekking</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/runner/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Camiseta-Running-mLarga.jpg" class="animation-grow">
                                <span class="image-caption">Runner</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="mt-20 mb-20">
            <div class="column-gap-default gap-max-width flex">
                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/policia/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Policia.jpg" class="animation-grow">
                                <span class="image-caption">Policía</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/falda/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Faldas.jpg" class="animation-grow">
                                <span class="image-caption">Falda</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/camisas/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Camisas-1.jpg" class="animation-grow">
                                <span class="image-caption">Camisas</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/trajes/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Americana.jpg" class="animation-grow">
                                <span class="image-caption">Traje de vestir</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="mt-20 mb-20">
            <div class="column-gap-default gap-max-width flex">
                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/uniformes-azafata/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Azafatas.jpg" class="animation-grow">
                                <span class="image-caption">Uniformes de azafata</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/uniformes-piloto/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Aviacion.jpg" class="animation-grow">
                                <span class="image-caption">Uniformes de piloto</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/uniforme-laboral/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Uniforme-trabajo.jpg" class="animation-grow">
                                <span class="image-caption">Uniforme laboral</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/batas/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Batas.jpg" class="animation-grow">
                                <span class="image-caption">Batas</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-20 mb-20">
            <div class="column-gap-default gap-max-width flex">
                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/uniformes-sanitarios/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Batas.jpg" class="animation-grow">
                                <span class="image-caption">Uniformes de enfermera</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/alta-visibilidad/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Alta-visibilidad.jpg" class="animation-grow">
                                <span class="image-caption">Alta visibilidad</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/vigilante-seguridad/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Vigilante-Seguridad.jpg" class="animation-grow">
                                <span class="image-caption">Vigilante de seguridad</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/mallas/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Cintura.jpg" class="animation-grow">
                                <span class="image-caption">Mallas</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="mt-20 mb-20">
            <div class="column-gap-default gap-max-width flex">
                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/mochila-gimnasio/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Bolsa-Deportiva.jpg" class="animation-grow">
                                <span class="image-caption">Mochilas de gimnasio</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/gorras/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Gorras.jpg" class="animation-grow">
                                <span class="image-caption">Gorras</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/cocinero/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Chaqueta-cocinero.jpg" class="animation-grow">
                                <span class="image-caption">Cocinero</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/delantal/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Delantales.jpg" class="animation-grow">
                                <span class="image-caption">Delantal</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="mt-20 mb-20">
            <div class="column-gap-default gap-max-width flex">
                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/mochila/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Mochilas.jpg" class="animation-grow">
                                <span class="image-caption">Mochilas</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/toalla-bano/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Toallas-1.jpg" class="animation-grow">
                                <span class="image-caption">Toallas de baño</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/albornoces/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Albornoces.jpg" class="animation-grow">
                                <span class="image-caption">Albornoces de microfibra</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/manta-bebe/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Manta.jpg" class="animation-grow">
                                <span class="image-caption">Manta de bebé</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="mt-20 mb-20">
            <div class="column-gap-default gap-max-width flex">
                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/mascarilla/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Mascarillas.jpg" class="animation-grow">
                                <span class="image-caption">Mascarillas</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/tapiceria/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Tapicerias.jpg" class="animation-grow">
                                <span class="image-caption">Tapicería</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/colchones/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Colchon.jpg" class="animation-grow">
                                <span class="image-caption">Colchones</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/corseteria/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Corseteria.jpg" class="animation-grow">
                                <span class="image-caption">Corsetería</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-20 mb-20">
            <div class="column-gap-default gap-max-width flex">
                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">

                            <a class="image-link" href="/sectores/banadores/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Banadores-mujer.jpg" class="animation-grow">
                                <span class="image-caption">Bañadores</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget-25">
                    <div class="widget-wrap element-populated">
                        <div class="widget-container text-center">
                            <a class="image-link" href="/sectores/disfraces/">
                                <img loading="lazy" width="120" height="120" src="imagenes/sectores/Disfraz.jpg" class="animation-grow">
                                <span class="image-caption">Disfraces</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>

    </article>
</div>


<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>