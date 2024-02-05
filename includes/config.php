<?php
if (session_status() == 1) {
  session_start();
}

// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'usuario');
define('DB_PASS', 'Passw0rd$01');
define('DB_NAME_pertex', 'pertex');
define('DB_NAME_prgborman', 'prg_borman');
define('DB_NAME_formularios', 'formularios');

// Otras configuraciones globales
define('SITE_NAME', 'Tienda de telas y fornituras');
define('BASE_URL', 'http://localhost/prueba');

// Configuraciones de seguridad
define('SALT', 'tu_valor_secreto_aqui');

try {
  // Conexión a la base de datos de pertex
  $conexion_pertex = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME_pertex, DB_USER, DB_PASS);
  $conexion_pertex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion_pertex->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

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

require_once('clases/admin-user.php');
require_once('clases/user.php');

$adminuser = new AdminUser($conexion_prgborman);
$user = new User($conexion_prgborman);
