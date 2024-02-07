<?php
require_once 'includes/config.php';

$usuario = isset($_POST['admin-user']) ? htmlspecialchars($_POST['admin-user']) : '';
$password = isset($_POST['admin-password']) ? htmlspecialchars($_POST['admin-password']) : '';
if ($usuario != "" && $password != "") {
    if ($adminuser->login($usuario, $password, $conexion_prgborman)) {
        header('Location: admin-escritorio');
    } else {
        echo "Error login";
    }
} else {
    echo "Error";
}
