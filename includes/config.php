<?php
if (session_status() == 1) {
  session_start();
}

// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'usuario');
define('DB_PASS', 'Passw0rd$01');
define('DB_NAME_pertex', 'tienda_telas');
define('DB_NAME_prgborman', 'prg_borman');
define('DB_NAME_formularios', 'formularios');

// Otras configuraciones globales
define('SITE_NAME', 'Tienda de telas y fornituras');
define('BASE_URL', 'http://localhost/prueba');

// Configuraciones de seguridad
// define('SALT', 'tu_valor_secreto_aqui');

$conexion_tiendatelas = null;
$conexion_prgborman = null;
$conexion_formularios = null;

try {
  // Conexión a la base de datos de pertex
  $conexion_tiendatelas = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME_pertex, DB_USER, DB_PASS);
  $conexion_tiendatelas->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion_tiendatelas->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  // Conexión a la base de datos de prg_borman
  $conexion_prgborman = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME_prgborman, DB_USER, DB_PASS);
  $conexion_prgborman->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion_prgborman->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  // Conexión a la base de datos de formularios
  $conexion_formularios = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME_formularios, DB_USER, DB_PASS);
  $conexion_formularios->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion_formularios->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Error de conexión a la base de datos: " . $e->getMessage());
}

require_once(__DIR__ . '/../clases/Admin-user.php');
require_once(__DIR__ . '/../clases/User.php');

$adminuser = new AdminUser($conexion_prgborman);
$user = new User($conexion_prgborman);

function obtenerConexion_pertex()
{
  global $conexion_tiendatelas;
  return $conexion_tiendatelas;
}

//Carrito
$_SESSION['idCarrito'] = null;
if (isset($_SESSION['ID'])) {
  $sql = "SELECT id_carrito_loggedin FROM carrito_loggedin WHERE id_usuario = ?";
  $query = $conexion_tiendatelas->prepare($sql);
  $query->bindParam(1, $_SESSION['ID'], PDO::PARAM_INT);
  $query->execute();
  $_SESSION['idCarrito'] = $query->fetchColumn();
} else if (isset($_COOKIE['idUsuario'])) {
  $sql = "SELECT id_carrito_not_loggedin FROM carrito_not_loggedin WHERE id_usuario = ?";
  $query = $conexion_tiendatelas->prepare($sql);
  $query->bindParam(1, $_COOKIE['idUsuario'], PDO::PARAM_STR);
  $query->execute();
  $_SESSION['idCarrito'] = $query->fetchColumn();
}

if ($_SESSION['idCarrito']) {
  $sqlProductos = "SELECT * FROM carrito_not_loggedin_productos WHERE id_carrito_not_loggedin = ?";
  $queryProductos = $conexion_tiendatelas->prepare($sqlProductos);
  $queryProductos->bindParam(1, $_SESSION['idCarrito'], PDO::PARAM_INT);
  $queryProductos->execute();
  $productosCarrito = $queryProductos->fetchAll(PDO::FETCH_ASSOC);

  // Guardar los productos del carrito en la sesión
  $_SESSION['carrito'] = $productosCarrito;
}
