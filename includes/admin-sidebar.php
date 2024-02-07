
<body>
    <button onclick="topFunction()" id="toTop" title="Go to top"> <img src="imagenes/angle-up.svg" alt="Icono flecha hacia arriba"> </button>


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
        <img width=250 src="imagenes/LOGO-TELAS-Y-FORNITURAS-HORIZONTAL-COLOR-1.png">
        <div class="enlaces">
            <a class="" href="admin-escritorio">Escritorio</a>
            <a class="" href="admin-usuarios">Usuarios</a>
            <a class="" href="admin-pedidos">Pedidos</a>
            <a class="" href="admin-productos">Productos</a>
            <a class="" href="admin-estadisticas">Estadísticas</a>
            <a class="" href="logout">Salir</a>
        </div>
    </div>