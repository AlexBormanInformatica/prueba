<?php
require_once 'includes/config.php';
require_once 'clases/AES.php';
require_once 'includes/header.php';
?>
<div class="">
    <div class="account-container">
        <div class="primary">
            <div class="text-center">
                <h2 class="text-start">Mi cuenta</h2>
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
</div>

<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>