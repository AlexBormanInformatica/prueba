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
            <div class="cf">
                <div class="row">
                    <div class="col-md-8">
                        <div class="heading cf">
                            <h1 class="entry-title">Carrito</h1>
                            <!-- <div class="button-container cart-button">
                                <a href="#" class="btn  button-basic">Seguir comprando</a>
                            </div> -->
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
                            <div class="cart">
                                <form action="" method="POST">
                                    <table class="table cart">
                                        <thead>
                                            <tr>
                                                <th> </th>
                                                <th colspan="2">Producto </th>
                                                <th>Cantidad </th>
                                                <th>Precio </th>
                                                <th>Subtotal </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="items">
                                                <td class="cartSection">
                                                    <a href="#" class="remove">x</a>
                                                </td>
                                                <td class="cartSection" colspan="2" data-label="Producto">
                                                    <a href="producto" class="imageAndText">
                                                        <img src="imagenes/carrusel/BOTECADUNAN1500314.jpg" alt="" class="itemImg" />
                                                        <div class="textSection">
                                                            <p class="itemNumber">SKU: COTECADUN</p>
                                                            <p class="cart-product-title">DUNCAN</p>
                                                            <p class="stockStatus stock">DISPONIBLE</p>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="cartSection" data-label="Cantidad">
                                                    <input type="text" class="qty form-control" value="1" />
                                                </td>
                                                <td data-label="Precio">
                                                    <span class="amount"> 5,00€ </span>
                                                </td>
                                                <td class="cartSection" data-label="Subtotal">
                                                    <span class="subtotal-producto"> 15,00€ </span>
                                                </td>
                                            </tr>
                                            <tr class="items">
                                                <td class="cartSection">
                                                    <a href="#" class="remove">x</a>
                                                </td>
                                                <td class="cartSection" colspan="2" data-label="Producto">
                                                    <a href="producto" class="imageAndText">
                                                        <img src="imagenes/carrusel/BOTECASEVAN1500336.jpg" alt="" class="itemImg" />
                                                        <div class="textSection">
                                                            <p class="itemNumber">SKU: BOTECASEV</p>
                                                            <p class="cart-product-title">SEVILLA</p>
                                                            <p class="stockStatus no-stock">AGOTADO</p>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="cartSection" data-label="Cantidad">
                                                    <input type="text" class="qty form-control" value="1" />
                                                </td>
                                                <td data-label="Precio">
                                                    <span class="amount"> 5,00€ </span>
                                                </td>
                                                <td class="cartSection" data-label="Subtotal">
                                                    <span class="subtotal-producto"> 15,00€ </span>
                                                </td>
                                            </tr>
                                            <tr class="items">
                                                <td class="cartSection">
                                                    <a href="#" class="remove">x</a>
                                                </td>
                                                <td class="cartSection" colspan="2" data-label="Producto">
                                                    <a href="producto" class="imageAndText">
                                                        <img src="imagenes/carrusel/BOTECADUNAN1500314.jpg" alt="" class="itemImg" />
                                                        <div class="textSection">
                                                            <p class="itemNumber">SKU: COTECADUN</p>
                                                            <p class="cart-product-title">DUNCAN</p>
                                                            <p class="stockStatus stock">DISPONIBLE</p>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="cartSection" data-label="Cantidad">
                                                    <input type="text" class="qty form-control" value="1" />
                                                </td>
                                                <td data-label="Precio">
                                                    <span class="amount"> 5,00€ </span>
                                                </td>
                                                <td class="cartSection" data-label="Subtotal">
                                                    <span class="subtotal-producto"> 15,00€ </span>
                                                </td>
                                            </tr>
                                            <tr class="items">
                                                <td class="cartSection">
                                                    <a href="#" class="remove">x</a>
                                                </td>
                                                <td class="cartSection" colspan="2" data-label="Producto">
                                                    <a href="producto" class="imageAndText">
                                                        <img src="imagenes/carrusel/BOTECASEVAN1500336.jpg" alt="" class="itemImg" />
                                                        <div class="textSection">
                                                            <p class="itemNumber">SKU: BOTECASEV</p>
                                                            <p class="cart-product-title">SEVILLA</p>
                                                            <p class="stockStatus no-stock">AGOTADO</p>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="cartSection" data-label="Cantidad">
                                                    <input type="text" class="qty form-control" value="1" />
                                                </td>
                                                <td data-label="Precio">
                                                    <span class="amount"> 5,00€ </span>
                                                </td>
                                                <td class="cartSection" data-label="Subtotal">
                                                    <span class="subtotal-producto"> 15,00€ </span>
                                                </td>
                                            </tr>
                                            <tr class="items">
                                                <td class="cartSection">
                                                    <a href="#" class="remove">x</a>
                                                </td>
                                                <td class="cartSection" colspan="2" data-label="Producto">
                                                    <a href="producto" class="imageAndText">
                                                        <img src="imagenes/carrusel/BOTECADUNAN1500314.jpg" alt="" class="itemImg" />
                                                        <div class="textSection">
                                                            <p class="itemNumber">SKU: COTECADUN</p>
                                                            <p class="cart-product-title">DUNCAN</p>
                                                            <p class="stockStatus stock">DISPONIBLE</p>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="cartSection" data-label="Cantidad">
                                                    <input type="text" class="qty form-control" value="1" />
                                                </td>
                                                <td data-label="Precio">
                                                    <span class="amount"> 5,00€ </span>
                                                </td>
                                                <td class="cartSection" data-label="Subtotal">
                                                    <span class="subtotal-producto"> 15,00€ </span>
                                                </td>
                                            </tr>
                                            <tr class="items">
                                                <td class="cartSection">
                                                    <a href="#" class="remove">x</a>
                                                </td>
                                                <td class="cartSection" colspan="2" data-label="Producto">
                                                    <a href="producto" class="imageAndText">
                                                        <img src="imagenes/carrusel/BOTECASEVAN1500336.jpg" alt="" class="itemImg" />
                                                        <div class="textSection">
                                                            <p class="itemNumber">SKU: BOTECASEV</p>
                                                            <p class="cart-product-title">SEVILLA</p>
                                                            <p class="stockStatus no-stock">AGOTADO</p>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="cartSection" data-label="Cantidad">
                                                    <input type="text" class="qty form-control" value="1" />
                                                </td>
                                                <td data-label="Precio">
                                                    <span class="amount"> 5,00€ </span>
                                                </td>
                                                <td class="cartSection" data-label="Subtotal">
                                                    <span class="subtotal-producto"> 15,00€ </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>

                    </div>

                    <div class="subtotal cf col">
                        <ul>
                            <li class="totalRow"><span class="label">Subtotal</span><span class="value">35,00€</span></li>
                            <li class="totalRow"><span class="label">Envío</span><span class="value">5,00€</span></li>
                            <li class="totalRow"><span class="label">IVA 21%</span><span class="value">4,00€</span></li>
                            <li class="totalRow final"><span class="label">Total</span><span class="value">44,00€</span></li>
                            <li class="totalRow">
                                <div class="button-container">
                                    <a href="#" class="btn button-basic">Finalizar compra</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php }
                ?>
                </div>
            </div>
        </main>
    </div>



    <?php
    require_once 'includes/footer.php';
    require_once 'includes/scripts.php';
    ?>