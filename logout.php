<?php require_once('includes/config.php');
include('clases/AES.php');
$adminuser->logout();
$user->logout();
header('Location: index');
