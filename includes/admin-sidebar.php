<body>
    <button onclick="topFunction()" id="toTop" title="Go to top"> <img data-src="imagenes/angle-up.svg" alt="Icono flecha hacia arriba" class="lazyload"> </button>


    <div class="container-user-info">
        <div class="toggle-div">
            <button class="toggle-btn" onclick="toggleSidebar()">

            </button>
        </div>
        <div class="user-info">
            <img data-src="imagenes/admin-user.svg" alt="Icono de usuario" class="lazyload">
            <span><?= $_SESSION['admin_user'] . " - " . $_SESSION['user_type'] ?></span>
        </div>
    </div>

    <div id="sidebar" class="sidenav">
        <img width=250 data-src="imagenes/LOGO-TELAS-Y-FORNITURAS-HORIZONTAL-COLOR-1.png" class="lazyload">
        <div class="enlaces">
            <a class="" href="admin-escritorio">Escritorio</a>
            <a class="" href="admin-usuarios">Usuarios</a>
            <a class="" href="admin-pedidos">Pedidos</a>
            <a class="" href="admin-productos">Productos</a>
            <a class="" href="admin-estadisticas">Estadísticas</a>
            <a class="" href="logout">Salir</a>
        </div>
    </div>