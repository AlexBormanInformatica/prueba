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

    <title>Admin login</title>
    <?php
    require_once 'includes/css.php';
    ?>

<body class="body-admin">
    <button onclick="topFunction()" id="toTop" title="Go to top"> <img data-src="imagenes/angle-up.svg" class="lazyload" alt="Icono flecha hacia arriba"> </button>
    <div class="container-admin">
        <h1 class="text-center size-medium">Iniciar sesión</h1>
        <form action="verificar-login.php" method="POST">
            <div class="mb-3">
                <label for="admin-user" class="form-label">Usuario</label>
                <input required type="text" class="form-control" id="admin-user" name="admin-user">
            </div>
            <div class="mb-3">
                <label for="admin-password" class="form-label">Password</label>
                <input required type="password" class="form-control" id="admin-password" name="admin-password">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-primary">Entrar</button>
            </div>
        </form>
    </div>

    <?php
    require_once 'includes/scripts.php';
    ?>