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

    <title>Usuarios</title>
    <?php
    require_once 'includes/css.php';
    ?>
    <link rel="stylesheet" href="css/datatable.css">
</head>
<?php
require_once 'includes/admin-sidebar.php';
?>

<!-- Contenido principal -->
<div id="mainContent" class="main-content">
    <?php
    try {
        $sql = "SELECT idfichaempresa, nombreFiscal, pais, CifDniVat, email, telefono FROM fichaempresametas f
        INNER JOIN marcas_has_fichaempresametas m ON m.fichaempresametas_idfichaempresa = f.idfichaempresa
        WHERE marcas_idMarca = 12";
        $query = $conexion_formularios->prepare($sql);
        $query->execute();
        $rowCount = $query->rowCount();
    } catch (Exception $e) {
    }
    ?>
    <h1 class="ml-10 size-medium">Usuarios (<?php echo $rowCount; ?>)</h1>
    <div class="panel-usuarios">
        <table id="tablaUsuarios" class="table" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE FISCAL</th>
                    <th>CIF</th>
                    <th>EMAIL</th>
                    <th>PEDIDOS</th>
                    <th>DETALLES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Generación de filas de la tabla
                while ($fila = $query->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$fila['idfichaempresa']}</td>";
                    echo "<td>{$fila['nombreFiscal']}</td>";
                    echo "<td>{$fila['CifDniVat']}</td>";
                    echo "<td>{$fila['email']}</td>";
                    echo "<td>10</td>";
                    echo "<td><a class='btn btn-outline-secondary' href='admin-detalles-usuario?id={$fila['idfichaempresa']}'>VER MÁS ></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
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
<script src="js/admin-usuarios.js"></script>