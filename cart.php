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

    <title>Carrito</title>
    <?php
    require_once 'includes/header.php';
    ?>
    <div class="container">
        <main>
            <article>
                <h1 class="entry-title">Carrito</h1>
                <div class="entry-content">
                    <div class="alert alert-warning" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg>
                        Debes completar tu ficha para poder comprar. <a href="https://textilforms.com/login?<?= PHP_AES_Cipher::encrypt("idioma=ES&web=12") ?>" target="_blank">Completa tu ficha aquí</a>
                    </div>
                    <?php
                    // Verificar si el carrito está vacío
                    if (empty($_SESSION['carrito'])) {
                    ?>
                        <div class="cart-message">
                            <div class="alert alert-primary" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                </svg>
                                Tu carrito está vacío.
                            </div>
                        </div>
                    <?php
                    } else {

                    ?>
                        <section class="container content-section" id="shopping-cart">
                            <table class="table table-cart text-center">
                                <thead>
                                    <tr>
                                        <th colspan="2">Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody class="cart-items">
                                    <?php
                                    foreach ($_SESSION['carrito'] as $producto) {
                                        echo '<tr>';
                                        echo '<td colspan="2"><img width="60" height="60" src="imagenes/top-ventas/BOFOHITLPLA00M3314.jpg" alt="proucto">';
                                        echo 'TULPAC nº100</td>';
                                        echo '<td>3,27</td>';
                                        echo '<td class="text-center"><div class="input-group">
                                        <button class="btn " type="button" id="button-addon1">-</button>
                                        <input type="text" class="form-control" placeholder="" aria-describedby="button-addon1">
                                        <button class="btn " type="button" id="button-addon2">+</button>
                                      </div></td>';
                                        echo '<td>3,27</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>

                            <div class="cart-total">
                                <strong class="cart-total-title">Total</strong>
                                <span class="cart-total-price" style="text-align: right;">$0</span>
                            </div>


                        </section>
                    <?php }
                    ?>
                </div>
            </article>
        </main>
    </div>



    <?php
    require_once 'includes/footer.php';
    require_once 'includes/scripts.php';
    ?>