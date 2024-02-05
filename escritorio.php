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

    <title>Escritorio admin</title>
    <?php
    require_once 'includes/css.php';
    ?>

    <div class="container-user-info">
        <div class="toggle-div">
            <button class="toggle-btn" onclick="toggleSidebar()">

            </button>
        </div>
        <div class="user-info">
            <img src="imagenes/admin-user.svg" alt="Icono de usuario">
            <span><?= $_SESSION['admin_user'] . " - " . $_SESSION['user_type'] ?></span>
        </div>
    </div>

    <div id="sidebar" class="sidenav">
        <h2 class="text-center size-medium">Panel</h2>
        <a href="#">Escritorio</a>
        <a href="#">Usuarios</a>
        <a href="#">Pedidos</a>
        <a href="#">Productos</a>
        <a href="logout">Salir</a>
    </div>

    <!-- Contenido principal -->
    <div id="mainContent" class="main-content">
        <h2>Bienvenido al Panel de Administración</h2>
        <p>Este es un ejemplo básico de un panel de administración con un panel lateral.</p>
    </div>

    <?php
    require_once 'includes/scripts.php';
    ?>
    <script src="js/admin-escritorio.js"></script>