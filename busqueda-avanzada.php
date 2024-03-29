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

    <title>Busqueda de productos</title>
    <?php
    require_once 'includes/header.php';
    ?>
    <div class="container">

        <?php
        /*Verificar si la cadena de consulta en la URL de la solicitud actual no está vacía.
        QUERY_STRING contiene la cadena de consulta de la URL.
        */
        $tejido = "";
        if (!empty($_SERVER['QUERY_STRING'])) {
            $cadena = $_SERVER['QUERY_STRING'];

            //Desencriptar la URL
            $cadena = PHP_AES_Cipher::decrypt($cadena);

            // Obtener el string desencriptado del objeto
            $cadena = strval($cadena);

            // Inicializar un array para almacenar los parámetros
            $parametros = array();

            // Utilizar parse_str para analizar la cadena y almacenar los resultados en $parametros
            parse_str($cadena, $parametros);

            // Guardar el parámetro en una variable
            if (isset($parametros['tejido'])) {
                $tejido = $parametros['tejido'];
            }
            $i = 131;
            $c = 0;
        }
        ?>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=".">Home</a></li>
                <li class="breadcrumb-item"><a href="tejidos">Tejidos</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page"><?= $tejido ?></li>
            </ol>
        </nav>
        <div class="categoria">
            <h1 class="text-capitalize">Tejidos - <?= $tejido ?></h1>
            <p id="cantidad-productos" class="ba price">Mostrando <?= $i ?> producto<?= $i > 1 ? "s" : "" ?></p>
        </div>

        <div class="flex ba">
            <div class="select-container">
                <a href="" class="fs-6" id="limpiar">Limpiar</a>
            </div>

            <div class="select-container busqueda-avanzada">
                <select class="form-select" aria-label="" id="selectSector">
                    <option class="text-uppercase" value="0" selected>SECTOR</option>
                    <option class="text-uppercase" value="1">CAMISETAS</option>
                    <option class="text-uppercase" value="2">CAMISETAS MUJER</option>
                    <option class="text-uppercase" value="3">POLOS</option>
                    <option class="text-uppercase" value="4">SUDADERAS</option>
                    <option class="text-uppercase" value="5">FORRO POLAR</option>
                    <option class="text-uppercase" value="6">SOFTSHELL</option>
                    <option class="text-uppercase" value="7">EQUIPACIÓN FÚTBOL</option>
                    <option class="text-uppercase" value="8">EQUIPACIÓN BALONCESTO</option>
                    <option class="text-uppercase" value="9">MAILLOT CICLISMO</option>
                    <option class="text-uppercase" value="10">CULOTE CICLISMO</option>
                    <option class="text-uppercase" value="11">GIMNASIA RÍTMICA</option>
                    <option class="text-uppercase" value="12">CHÁNDAL</option>
                    <option class="text-uppercase" value="13">ABRIGOS</option>
                    <option class="text-uppercase" value="14">ROPA DE LLUVIA</option>
                    <option class="text-uppercase" value="15">PANTALÓN DE TREKKING</option>
                    <option class="text-uppercase" value="16">RUNNER</option>
                    <option class="text-uppercase" value="17">POLICÍA</option>
                    <option class="text-uppercase" value="18">FALDA</option>
                    <option class="text-uppercase" value="19">CAMISAS</option>
                    <option class="text-uppercase" value="20">TRAJE DE VESTIR</option>
                    <option class="text-uppercase" value="21">UNIFORMES DE AZAFATA</option>
                    <option class="text-uppercase" value="22">UNIFORMES DE PILOTO</option>
                    <option class="text-uppercase" value="23">UNIFORME LABORAL</option>
                    <option class="text-uppercase" value="24">BATAS</option>
                    <option class="text-uppercase" value="25">UNIFORMES DE ENFERMERA</option>
                    <option class="text-uppercase" value="26">ALTA VISIBILIDAD</option>
                    <option class="text-uppercase" value="27">VIGILANTE DE SEGURIDAD</option>
                    <option class="text-uppercase" value="28">MALLAS</option>
                    <option class="text-uppercase" value="29">MOCHILAS DE GIMNASIO</option>
                    <option class="text-uppercase" value="30">GORRAS</option>
                    <option class="text-uppercase" value="31">COCINERO</option>
                    <option class="text-uppercase" value="32">DELANTAL</option>
                    <option class="text-uppercase" value="33">MOCHILAS</option>
                    <option class="text-uppercase" value="34">TOALLAS DE BAÑO</option>
                    <option class="text-uppercase" value="35">ALBORNOCES DE MICROFIBRA</option>
                    <option class="text-uppercase" value="36">MANTA DE BEBÉ</option>
                    <option class="text-uppercase" value="37">MASCARILLAS</option>
                    <option class="text-uppercase" value="38">TAPICERÍA</option>
                    <option class="text-uppercase" value="39">COLCHONES</option>
                    <option class="text-uppercase" value="40">CORSETERÍA</option>
                    <option class="text-uppercase" value="41">BAÑADORES</option>
                    <option class="text-uppercase" value="42">DISFRACES</option>
                </select>

                <select class="form-select" aria-label="" id="selectCategoria">
                    <option class="text-uppercase" value="0" selected>CATEGORIA</option>
                    <option class="text-uppercase" value="1">Técnico</option>
                    <option class="text-uppercase" value="2">Canalé</option>
                    <option class="text-uppercase" value="3">Polar</option>
                    <option class="text-uppercase" value="4">Felpa</option>
                    <option class="text-uppercase" value="5">Acetato</option>
                    <option class="text-uppercase" value="6">Liso</option>
                    <option class="text-uppercase" value="7">Granito</option>
                </select>

                <select class="form-select" aria-label="" id="selectSubcategoria">
                    <option class="text-uppercase" value="0" selected>SUBCATEGORIA</option>
                </select>
            </div>
        </div>

        <div class="product-container">
            <ul class="row products">
                <?php
                while ($c < $i) {
                ?>
                    <li class="col product">
                        <a href="producto?id=1" class="loop-product__link">
                            <span class="badge stockStatus stock">Disponible</span>
                            <div class=""><a href="producto?id=1"><img <?= $c > 10 ? 'data-src="imagenes/carrusel/BOTEPUTCKAN1000353.jpg" class="lazyload"' : 'src="imagenes/carrusel/BOTEPUTCKAN1000353.jpg"' ?> /></a></div>
                            <div class="summary-wrap">
                                <span class="product-category">
                                    Felpa
                                </span>
                                <h3 class="product-title">TOKIO</h3>
                                <span class="ba price"><span class="amount">9,51<span>€</span></span> – <span class="amount">10,89<span>€</span></span>/kg <small>IVA incluido</small></span>
                        </a>

                        <div class="product-links">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                                </svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0" />
                                </svg>
                            </a>
                        </div>
                        <div class="tags">
                            <a href="sectores" class="tag">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                                    <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0" />
                                    <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1m0 5.586 7 7L13.586 9l-7-7H2z" />
                                </svg>
                                Sudaderas
                            </a>
                        </div>
                    </li>
                <?php
                    $c++;
                }
                ?>
            </ul>
        </div>
    </div>
    <?php
    require_once 'includes/footer.php';
    require_once 'includes/scripts.php';
    ?>
    <script src="js/busqueda-avanzada.js"></script>