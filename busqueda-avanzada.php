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
        }
        ?>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=".">Home</a></li>
                <li class="breadcrumb-item"><a href="tejidos">Tejidos</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page"><?= $tejido ?></li>
            </ol>
        </nav>
        <h1 class="categoria text-capitalize">Tejidos - <?= $tejido ?></h1>

        <div class="busqueda-avanzada">
            <select class="form-select" aria-label="">
                <option selected>CATEGORIA</option>
                <option value="1">Técnico</option>
                <option value="2">Canalé</option>
                <option value="3">Polar</option>
                <option value="4">Felpa</option>
                <option value="5">Acetato</option>
                <option value="6">Liso</option>
                <option value="7">Granito</option>
            </select>

            <select class="form-select" aria-label="">
                <option selected>SUBCATEGORIA</option>
                <option value="1">Interlock</option>
                <option value="2">Calado</option>
                <option value="3">Piqué</option>
                <option value="4">Granito técnico</option>
                <option value="5">Gofrado técnico</option>
                <option value="6">Ladillado</option>
                <option value="7">Microrejilla</option>
                <option value="7">Perchado</option>
                <option value="7">Cuadrille</option>
                <option value="7">Hexagonal</option>
                <option value="7">Liso técnico</option>
                <option value="7">Micro-calado</option>
                <option value="7">Micro-perforado</option>
                <option value="7">Tubular</option>
                <option value="7">Webenit</option>
            </select>
        </div>

        <div class="product-container">
            <ul class="row products">
                <?php
                $i = 131;
                $c = 0;
                while ($c < $i) {
                ?>
                    <li class="col product">
                        <a href="producto?id=1" class="loop-product__link">
                            <span class="badge stockStatus stock">Disponible</span>
                            <div class=""><a href="producto?id=1"><img data-src="imagenes/carrusel/BOTEPUTCKAN1000353.jpg" class="lazyload" /></a></div>
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