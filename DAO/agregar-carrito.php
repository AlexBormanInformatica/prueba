<?php
require_once '../includes/config.php';
require_once '../clases/AES.php';

$mensaje = "";

if (isset($_POST["product_id"]) && isset($_POST["quantity"]) && isset($_POST["color"]) && isset($_POST["talla"])) {
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        agregarAlCarritoUsuarioAutenticado(obtenerConexion_pertex());
    } else {
        $idUsuario = 0;
        agregarAlCarritoUsuarioNoAutenticado($idUsuario, obtenerConexion_pertex());
    }
} else {
    $mensaje = "Error: Falta información del producto.";
}

// Función para agregar un producto al carrito de un usuario autenticado
function agregarAlCarritoUsuarioAutenticado($conexion_tiendatelas)
{
    try {
        $sql = "INSERT INTO carrito_loggedin (id_producto, id_usuario, color, talla, cantidad) VALUES (?,?,?,?,?)";
        $query = $conexion_tiendatelas->prepare($sql);
        $query->bindParam(1, $_POST["product_id"], PDO::PARAM_INT);
        $query->bindParam(2, $_POST["ID"], PDO::PARAM_INT);
        $query->bindParam(3, $_POST["color"], PDO::PARAM_INT);
        $query->bindParam(4, $_POST["talla"], PDO::PARAM_INT);
        $query->bindParam(5, $_POST["quantity"], PDO::PARAM_INT);
        $query->execute();
        $mensaje = "Producto agregado al carrito exitosamente.";
    } catch (Exception $e) {
        $mensaje = "Error al agregar el producto al carrito: " . $e->getMessage();
    }
}

// Función para agregar un producto al carrito de un usuario no autenticado
function agregarAlCarritoUsuarioNoAutenticado($idUsuario, $conexion_tiendatelas)
{
    try {
        $sql = "INSERT INTO carrito_not_loggedin (id_producto, id_cookie_usuario, color, talla, cantidad) VALUES (?,?,?,?,?)";
        $query = $conexion_tiendatelas->prepare($sql);
        $query->bindParam(1, $_POST["product_id"], PDO::PARAM_INT);
        $query->bindParam(2, $_POST["ID"], PDO::PARAM_INT);
        $query->bindParam(3, $_POST["color"], PDO::PARAM_INT);
        $query->bindParam(4, $_POST["talla"], PDO::PARAM_INT);
        $query->bindParam(5, $_POST["quantity"], PDO::PARAM_INT);
        $query->execute();
        $mensaje = "Producto agregado al carrito exitosamente.";
    } catch (Exception $e) {
        $mensaje = "Error al agregar el producto al carrito: " . $e->getMessage();
    }
}

// Verifica si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

} else {
    // No se recibió una solicitud POST
    echo "Error: Método de solicitud incorrecto.";
}
