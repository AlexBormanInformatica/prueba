<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="imagenes/<?= htmlspecialchars($_SESSION['nombreWeb']) ?>.ico"> -->

    <title>Admin login</title>

    <!--Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue&family=Quicksand&display=swap" rel="stylesheet">

    <!--Bootstrap 5.2-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--Slick slider 1.8-->
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />

    <!--Estilos propios-->
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body class="body-admin">
    <div class="container-admin">
        <h1 class="text-center size-medium">Iniciar sesión</h1>
        <form action="verificar-login.php" method="POST">
            <div class="mb-3">
                <label for="admin-user" class="form-label">Usuario</label>
                <input required type="text" class="form-control" name="admin-user">
            </div>
            <div class="mb-3">
                <label for="admin-password" class="form-label">Password</label>
                <input required type="password" class="form-control" name="admin-password">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-primary">Entrar</button>
            </div>
        </form>
    </div>

    <?php
    require_once 'includes/scripts.php';
    ?>