<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="imagenes/<?= htmlspecialchars($_SESSION['nombreWeb']) ?>.ico"> -->

    <title>Tienda online de telas, tejidos y accesorios textiles</title>

    <!--Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue&family=Quicksand&display=swap" rel="stylesheet">

    <!--Bootstrap 5.2-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!--Slick slider-->
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />

    <!--Estilos propios-->
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>
    <header class="site-header">
        <div class="div-envio-gratis">
            <div class="flex">
                <p class="no-margin"> <img draggable="false" role="img" class="emoji" alt="🚚" src="https://s.w.org/images/core/emoji/14.0.0/svg/1f69a.svg">
                    España península plazo de entrega de 3 a 5 días | <img draggable="false" role="img" class="emoji" alt="📢" src="https://s.w.org/images/core/emoji/14.0.0/svg/1f4e2.svg"><img draggable="false" role="img" class="emoji" alt="📢" src="https://s.w.org/images/core/emoji/14.0.0/svg/1f4e2.svg">
                    Envío GRATUITO a partir de 50€ <img draggable="false" role="img" class="emoji" alt="🧵" src="https://s.w.org/images/core/emoji/14.0.0/svg/1f9f5.svg"> </p>
            </div>
        </div>
        <div class="main-header">
            <div class="primary-header row">
                <div class="grid-center-col-layout">
                    <div class="site-header-primary-section flex">
                        <aside class="header-widget-area widget-area site-header-focus-item header-widget-area-inner" data-section="sidebar-widgets-header-widget-1" aria-label="Header Widget 1">
                            <form role="search" action="" method="get">
                                <div class=" mb-3">
                                    <span id="basic-addon1"><svg class="icono-buscar" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 51.539 51.361" xml:space="preserve">
                                            <path d="M51.539,49.356L37.247,35.065c3.273-3.74,5.272-8.623,5.272-13.983c0-11.742-9.518-21.26-21.26-21.26 S0,9.339,0,21.082s9.518,21.26,21.26,21.26c5.361,0,10.244-1.999,13.983-5.272l14.292,14.292L51.539,49.356z M2.835,21.082 c0-10.176,8.249-18.425,18.425-18.425s18.425,8.249,18.425,18.425S31.436,39.507,21.26,39.507S2.835,31.258,2.835,21.082z"></path>
                                        </svg></span>
                                    <input type="text" class="input-buscar" placeholder="Buscar productos" aria-label="Buscar productos" aria-describedby="basic-addon1">
                                </div>
                            </form>
                        </aside>
                        <div class="flex">
                        </div>
                    </div>
                    <div class="site-header-primary-section flex">
                        <div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
                            <div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
                                <span>
                                    <a href="<?php echo BASE_URL; ?>" rel="home">
                                        <img width="168" height="119" alt="Logo Tienda de telas y fornituras" decoding="async" data-srcset="" data-src="" data-sizes="(max-width: 168px) 100vw, 168px" class="custom-logo lazyloaded" src="imagenes/cropped-LOGO-TELAS-Y-FORNITURAS-COLOR-1-3-168x119.png" sizes="(max-width: 168px) 100vw, 168px" srcset="">
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="site-header-primary-section flex">
                        <div class="flex"> </div>
                        <aside>
                            <section>
                                <div class="d-flex align-items-center justify-content-center justify-content-sm-end">
                                    <ul class="nav navbar">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">IDIOMA</a>
                                            <ul class="dropdown-menu">
                                                <li><a aria-label="" class="dropdown-item" href=''><img src="imagenes/banderas/ES.png" alt=""><span class="p-3 ">ES</span></a></li>
                                                <li><a aria-label="" class="dropdown-item" href=''><img src="imagenes/banderas/FR.png" alt=""><span class="p-3 ">FR</span></a></li>
                                                <li><a aria-label="" class="dropdown-item" href=''><img src="imagenes/banderas/IT.png" alt=""><span class="p-3 ">IT</span></a></li>
                                                <li><a aria-label="" class="dropdown-item" href=''><img src="imagenes/banderas/PT.png" alt=""><span class="p-3 ">PT</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </aside>
                        <div class="header-cart">
                            <div class="cart-outline">
                                <a href="carrito" class="cart-container">
                                    <div class="cart-wrap">
                                        <span class="cart-info-wrap">
                                            <span class="cart-total"><span class="amount">0,00<span>€</span></span></span>
                                        </span>
                                        <i class="icon-shopping-cart" data-cart-total="0">
                                            <span class="ast-icon icon-cart">
                                                <img src="imagenes/cart.svg" alt="Icono de carrito">
                                            </span>
                                        </i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="header-account">
                            <div class="header-account-wrap">
                                <a class="header-account-link" aria-label="Enlace del icono de la cuenta" href="/mi-cuenta/" target="_self">
                                    <img src="imagenes/user.svg" alt="Icono de usuario">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>