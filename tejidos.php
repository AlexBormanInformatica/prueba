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

    <title>Tejidos</title>
    <?php
    require_once 'includes/header.php';
    ?>
    <div class="container">
        <main>
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=".">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tejidos</li>
                </ol>
            </nav>
            <h1 class="categoria">Tejidos</h1>
            <ul class="cards">
                <li>
                    <a href="busqueda-avanzada?<?= PHP_AES_Cipher::encrypt("tejido=punto") ?>" class="card">
                        <img src="imagenes/tejidos/Punto.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <img class="card__thumb" src="imagenes/tejidos/punto.svg" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">PUNTO</h3>
                                </div>
                            </div>
                            <p class="card__description">Tejidos versátiles y cómodos para prendas como jerséis y leggings.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="busqueda-avanzada?<?= PHP_AES_Cipher::encrypt("tejido=elastico") ?>" class="card">
                        <img src="imagenes/tejidos/Elastico.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <img class="card__thumb" src="imagenes/tejidos/elastico.svg" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">ELASTICO</h3>
                                </div>
                            </div>
                            <p class="card__description">Tejidos diseñados para prendas ajustadas y deportivas, ofreciendo comodidad y libertad de movimiento.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="busqueda-avanzada?<?= PHP_AES_Cipher::encrypt("tejido=entretelas") ?>" class="card">
                        <img src="imagenes/tejidos/Entretelas.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <img class="card__thumb" src="imagenes/tejidos/entretelas.svg" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">ENTRETELAS</h3>
                                </div>
                            </div>
                            <p class="card__description">Variedad de entretelas termoadhesivas para reforzar cuellos, puños y otras áreas de tus prendas.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="busqueda-avanzada?<?= PHP_AES_Cipher::encrypt("tejido=acolchado") ?>" class="card">
                        <img src="imagenes/tejidos/Acolchados.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <img class="card__thumb" src="imagenes/tejidos/acolchado.svg" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">ACOLCHADO</h3>
                                </div>
                            </div>
                            <p class="card__description">Tejidos acolchados con relleno suave, perfectos para chaquetas, chalecos y mantas.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="busqueda-avanzada?<?= PHP_AES_Cipher::encrypt("tejido=softshell") ?>" class="card">
                        <img src="imagenes/tejidos/Softshell.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <img class="card__thumb" src="imagenes/tejidos/softshell.svg" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">SOFTSHELL</h3>
                                </div>
                            </div>
                            <p class="card__description">Tejidos impermeables, transpirables y elásticos ideales para prendas de exterior.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="busqueda-avanzada?<?= PHP_AES_Cipher::encrypt("tejido=rejilla") ?>" class="card">
                        <img src="imagenes/tejidos/Rejilla.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <img class="card__thumb" src="imagenes/tejidos/rejilla.svg" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">REJILLA</h3>
                                </div>
                            </div>
                            <p class="card__description">Tejidos ligeros y transpirables para prendas deportivas, proporcionando una ventilación excepcional.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="busqueda-avanzada?<?= PHP_AES_Cipher::encrypt("tejido=cuellos%20y%20mangas") ?>" class="card">
                        <img src="imagenes/tejidos/Cuellos-y-mangas.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <img class="card__thumb" src="imagenes/tejidos/cuellos-y-mangas.svg" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">CUELLOS Y MANGAS</h3>
                                </div>
                            </div>
                            <p class="card__description">Tejidos de alta calidad diseñados específicamente para detalles como cuellos y mangas.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="busqueda-avanzada?<?= PHP_AES_Cipher::encrypt("tejido=estampado") ?>" class="card">
                        <img src="imagenes/tejidos/Estampado.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <img class="card__thumb" src="imagenes/tejidos/estampado.svg" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">ESTAMPADO</h3>
                                </div>
                            </div>
                            <p class="card__description">Variedad de tejidos con diseños diversos, perfectos para proyectos de costura creativos.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="busqueda-avanzada?<?= PHP_AES_Cipher::encrypt("tejido=rizo") ?>" class="card">
                        <img src="imagenes/tejidos/Rizo.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <img class="card__thumb" src="imagenes/tejidos/rizo.svg" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">RIZO</h3>
                                </div>
                            </div>
                            <p class="card__description">Tejidos suaves y absorbentes ideales para toallas, batas de baño y prendas deportivas.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="busqueda-avanzada?<?= PHP_AES_Cipher::encrypt("tejido=calada") ?>" class="card">
                        <img src="imagenes/tejidos/Calada.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <img class="card__thumb" src="imagenes/tejidos/calada.svg" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">CALADA</h3>
                                </div>
                            </div>
                            <p class="card__description">Tejidos con delicadas aberturas y patrones de encaje para prendas ligeras y ventiladas.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="busqueda-avanzada?<?= PHP_AES_Cipher::encrypt("tejido=no%20tejido") ?>" class="card">
                        <img src="imagenes/tejidos/No-tejidos.jpg" class="card__image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <img class="card__thumb" src="imagenes/tejidos/no-tejidos.svg" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">NO TEJIDO</h3>
                                </div>
                            </div>
                            <p class="card__description">Tejidos versátiles y duraderos para diversas aplicaciones, desde decoración hasta uso industrial y médico.</p>
                        </div>
                    </a>
                </li>

            </ul>
        </main>

    </div>
    <?php
    require_once 'includes/footer.php';
    require_once 'includes/scripts.php';
    ?>