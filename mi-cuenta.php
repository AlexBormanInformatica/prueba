<?php
require_once 'includes/config.php';
require_once 'clases/AES.php';

if (!$user->is_logged_in()) {
    header('Location: login');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico">

    <title>Mi cuenta</title>
    <?php
    require_once 'includes/header.php';
    ?>

    <div class="account-container">
        <div class="primary">
            <div class="text-center">
                <h2 class="text-start entry-title">Mi cuenta</h2>
            </div>

            <div class="MyAccount">
                <nav class="MyAccount-navigation">
                    <ul>
                        <li class="MyAccount-navigation-link is-active">
                            <a href="">Escritorio</a>
                        </li>
                        <li class="MyAccount-navigation-link">
                            <a href="https://textilforms.com/login?<?= PHP_AES_Cipher::encrypt("idioma=ES&web=12") ?>" target='_blank'>Detalles de la cuenta</a>
                        </li>
                        <li class="MyAccount-navigation-link">
                            <a href="pedidos">Pedidos</a>
                        </li>
                        <li class="MyAccount-navigation-link">
                            <a href="favoritos">Favoritos</a>
                        </li>
                        <li class="MyAccount-navigation-link">
                            <a href="customer-logout/?_wpnonce=a3411822e7">Salir</a>
                        </li>
                    </ul>
                </nav>

                <div class="MyAccount-content">
                    <p> Hola <strong>alexserrano</strong> (¿no eres <strong>alexserrano</strong>? <a href="logout.php">Cerrar sesión</a>)</p>
                    <p>Desde el escritorio de tu cuenta puedes ver tus pedidos recientes, gestionar tus direcciones de envío y facturación y editar tu contraseña y los detalles de tu cuenta.</p>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once 'includes/footer.php';
    require_once 'includes/scripts.php';
    ?>