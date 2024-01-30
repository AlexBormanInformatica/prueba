<?php
// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'usuario');
define('DB_PASS', 'Passw0rd$01');
define('DB_NAME', 'pertex');

// Otras configuraciones globales
define('SITE_NAME', 'Tienda de telas y fornituras');
define('BASE_URL', 'http://localhost/prueba');

// Configuraciones de seguridad
define('SALT', 'tu_valor_secreto_aqui');

try {
    // Conexión a la base de datos con PDO
    $conexion = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);

    // Configuración adicional de PDO
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>
