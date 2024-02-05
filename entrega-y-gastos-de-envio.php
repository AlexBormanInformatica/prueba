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
    <!-- <link rel="shortcut icon" type="image/x-icon" href="imagenes/<?= htmlspecialchars($_SESSION['nombreWeb']) ?>.ico"> -->

    <title>Entrega y gastos de envío</title>
    <?php
    require_once 'includes/header.php';
    ?>

    <div class="container">
        <article>
            <h1 class="entry-title" itemprop="headline">Entrega y gastos de envío</h1>
            <p><strong>Plazos de entrega</strong></p>
            <p>Los pedidos realizados en la tienda de telas y fornituras, tienen los siguientes plazos de entrega aproximados, puesto que pueden variar, en días hábiles:</p>
            <p>– España entre 3 y 5 días laborales salvo Islas, Ceuta y Melilla con un periodo de hasta 7 días laborales.</p>
            <p>– Para envíos a países de Europa entre 4 y 10 días laborares.</p>
            <p>– Para otros destinos contactar con nuestro departamento de ventas escribiendo a ventas@tiendadetelasyfornituras.com.</p>
            <p>Los plazos indicados no incluyen las demoras por trámites aduaneros, tanto en origen como destino.</p>
            <p>Cualquiera que fuera el retraso en la entrega de mercancía no será motivo de reclamación alguna a Borman Industria Textil SL.</p>
            <img src="imagenes/Previos-envio-1024x841.jpg" />
            <p><strong>Gastos de envío y condiciones de transporte.</strong></p>
            <p>Los gastos de envío dependerán del importe de la mercancía como quedan registrados en las siguientes tablas:</p>
            <p><strong>*</strong>Ceuta y melilla: por cada envío se cobrará un suplemento por “gestión de Dua” con valor 20,50€.<br><strong>*</strong>Canarias: los envíos de mercancía con valor superior a 3.000 € se cobrará “gestión de Dua” con valor 20,50€.</p>
            <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
            <p><strong>Importante:</strong> Para exportaciones a países fuera de la comunidad económica europea y Canarias existen costes por trámites aduaneros tanto en origen como destino de los que no nos hacemos cargo, por dicho motivo no se cobran ningún tipo de impuesto en los productos.</p>
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
        </article>
    </div>

    <?php
    require_once 'includes/footer.php';
    require_once 'includes/scripts.php';
    ?>