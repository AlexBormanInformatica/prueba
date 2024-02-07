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

    <title>Formas de pago</title>
    <?php
    require_once 'includes/header.php';
    ?>

    <div class="container">
        <article>
            <h1 class="entry-title">Formas de pago</h1>
            <p>Podrás pagar sin cargo adicional por nuestra parte mediante tarjeta de crédito o débito. Puedes pagar con tarjeta VISA, VISA Electrón, MasterCard, Maestro, 4B y Red 6000.</p>
            <p>Durante la realización del pago entrará a una página web segura de nuestra entidad financiera, donde se le solicitará el número de su tarjeta y la fecha de caducidad. </p>
            <p>Para su tranquilidad, se le garantiza una absoluta seguridad, ya que tanto sus datos personales como los de su tarjeta viajan encriptados gracias al servidor seguro SSL proporcionado por esta entidad financiera.</p>
            <p>En las compras, debido a que su pedido puede sufrir una variación al alza o a la baja en su importe por la preparación de artículos de peso variable (tejidos, etc.) o sustitución de artículos , se solicitará una preautorización. Una vez preparemos su pedido se le cobrará la cantidad que finalmente corresponda por todos los artículos que se le envien. Esta operación se realizará entre 3 y 5 días laborales.</p>
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
        </article>
    </div>

    <?php
    require_once 'includes/footer.php';
    require_once 'includes/scripts.php';
    ?>