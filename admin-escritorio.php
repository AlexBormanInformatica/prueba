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

    <title>Escritorio</title>
    <?php
    require_once 'includes/css.php';
    ?>
</head>
<?php
require_once 'includes/admin-sidebar.php';
?>

<!-- Contenido principal -->
<div id="mainContent" class="main-content">
    <h1 class="ml-10 size-medium">Bienvenido al Escritorio de Administración</h1>
    <div class="cards">
        <!-- Estadísticas -->
        <div class="dashboard-stats">
            <h3>Estadísticas</h3>
            <p>Usuarios registrados: 100</p>
            <canvas id="register-chart"></canvas>
        </div>

        <!-- Estadísticas -->
        <div class="dashboard-stats">
            <h3>Estadísticas</h3>
            <p>Pedidos realizados: 37</p>
            <canvas id="order-chart"></canvas>
        </div>

        <!-- Últimas Actividades -->
        <div class="recent-activity">
            <h3>Actividad Reciente</h3>
            <p>Se ha actualizado la configuración del sitio.</p>
        </div>

        <!-- Notificaciones -->
        <div class="notifications">
            <h3>Notificaciones</h3>
            <p class="fw-bolder">Pedidos pendientes: 5</p>
            <p>El producto BOTECAPEG se ha agotado.</p>
        </div>

        <!-- Estadísticas del Sitio -->
        <div class="site-stats">
            <h3>Estadísticas del sitio</h3>
            <p>Visitantes únicos hoy: 50</p>
        </div>
    </div>

    <!-- Soporte y ayuda -->
    <div class="ml-10">
        <h3>Soporte y ayuda</h3>
        <p>Ante cualquier duda o problema, contactar con informática a través de Ayudika, explicando la situación, lo más detallada posible.</p>
    </div>
</div>


<?php
require_once 'includes/scripts.php';
?>
<script src="js/toggle-sidebar.js"></script>
<script src="js/admin-escritorio.js"></script>