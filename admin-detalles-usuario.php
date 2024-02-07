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

    <title>Detalle usuario</title>
    <?php
    require_once 'includes/css.php';
    ?>
</head>
<?php
require_once 'includes/admin-sidebar.php';
?>

<!-- Contenido principal -->
<div id="mainContent" class="main-content">
    <?php
    try {
        $sql = "SELECT * FROM fichaempresametas f
        INNER JOIN marcas_has_fichaempresametas m ON m.fichaempresametas_idfichaempresa = f.idfichaempresa
        WHERE marcas_idMarca = 12 AND idfichaempresa =?";
        $query_ficha = $conexion_formularios->prepare($sql);
        $query_ficha->bindParam(1, $_GET['id'], PDO::PARAM_INT);
        $query_ficha->execute();

        $sql = "SELECT * FROM direccionenviometa 
        WHERE  eliminado=0 AND fichaempresametas_idfichaempresa = ? order by principal desc";
        $query_direcciones = $conexion_formularios->prepare($sql);
        $query_direcciones->bindParam(1, $_GET['id'], PDO::PARAM_INT);
        $query_direcciones->execute();

        $sql = "SELECT * FROM personadecontactometa 
        WHERE eliminado=0 AND bloqueado=0 AND numCliFP is null
        AND fichaempresametas_idfichaempresa = ? order by principal desc";
        $query_contacto = $conexion_formularios->prepare($sql);
        $query_contacto->bindParam(1, $_GET['id'], PDO::PARAM_INT);
        $query_contacto->execute();
    } catch (Exception $e) {
    }
    ?>
    <h1 class="ml-10 size-medium">Detalles del usuario: </h1>
    <div class="panel-detalles-usuario">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="ficha-tab" data-bs-toggle="tab" href="#ficha" role="tab" aria-controls="ficha" aria-selected="true">Ficha empresa</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="direcciones-tab" data-bs-toggle="tab" href="#direcciones" role="tab" aria-controls="direcciones" aria-selected="false">Direcciones de envío</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contacto-tab" data-bs-toggle="tab" href="#contacto" role="tab" aria-controls="contacto" aria-selected="false">Personas de contacto</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pedidos-tab" data-bs-toggle="tab" href="#pedidos" role="tab" aria-controls="pedidos" aria-selected="false">Pedidos</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="ficha" role="tabpanel" aria-labelledby="ficha-tab">
                <?php
                // Generación de filas de la tabla
                while ($fila = $query_ficha->fetch(PDO::FETCH_ASSOC)) {
                    echo "<p><strong>Nombre fiscal: </strong>{$fila['nombreFiscal']}</p>";
                    echo "<p><strong>Nombre comercial: </strong>{$fila['nombreComercial']}</p>";
                    echo "<p><strong>CIF/DNI/VAT: </strong>{$fila['CifDniVat']}</p>";
                    echo "<p><strong>EMAIL: </strong>{$fila['email']}</p>";
                    echo "<p><strong>TELEFONO: </strong>{$fila['telefono']}</p>";
                    echo "<p><strong>PAIS: </strong>{$fila['pais']}</p>";
                    echo "<p><strong>PROVINCIA: </strong>{$fila['provincia']}</p>";
                    echo "<p><strong>POBLACION: </strong>{$fila['poblacion']}</p>";
                    echo "<p><strong>CODIG OPOSTAL: </strong>{$fila['codigoPostal']}</p>";
                    echo "<p><strong>DIRECCION: </strong>{$fila['direccion']}</p>";
                    echo "<p><strong>TIPO DE IVA: </strong>{$fila['TieneIvaExentoIntracomunitario']}</p>";
                    echo "<p><strong>RECARGO DE EQUIVALENCIA: </strong>{$fila['TieneRecargoEquivalencia']}</p>";
                }
                ?>
            </div>
            <div class="tab-pane fade" id="direcciones" role="tabpanel" aria-labelledby="direcciones-tab">
                <?php
                // Generación de tarjetas para cada dirección de envío
                while ($fila = $query_direcciones->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class='direccion-card'>";
                    echo "<h5 class='fw-bolder'>{$fila['nombreDireccion']}</h5>";
                    echo "<p><strong>País: </strong>{$fila['pais']}</p>";
                    echo "<p><strong>Provincia: </strong>{$fila['provincia']}</p>";
                    echo "<p><strong>Población: </strong>{$fila['poblacion']}</p>";
                    echo "<p><strong>Código Postal: </strong>{$fila['codigoPostal']}</p>";
                    echo "<p><strong>Dirección: </strong>{$fila['direccion']}</p>";
                    echo "<p><strong>Tipo de IVA: </strong>{$fila['TieneIvaExentoIntracomunitario']}</p>";
                    echo "<p><strong>Email: </strong>{$fila['email']}</p>";
                    echo "<p><strong>Teléfono: </strong>{$fila['telefono']}</p>";
                    echo "</div>";
                }
                ?>
            </div>

            <div class="tab-pane fade" id="contacto" role="tabpanel" aria-labelledby="contacto-tab">
                <?php
                // Generación de filas de la tabla
                while ($fila = $query_contacto->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div>";
                    echo "<p><strong>Nombre fiscal: </strong>{$fila['nombreFiscal']}</p>";
                    echo "<p><strong>Nombre comercial: </strong>{$fila['nombreComercial']}</p>";
                    echo "<p><strong>CIF/DNI/VAT: </strong>{$fila['CifDniVat']}</p>";
                    echo "<p><strong>EMAIL: </strong>{$fila['email']}</p>";
                    echo "<p><strong>TELEFONO: </strong>{$fila['telefono']}</p>";
                    echo "<p><strong>PAIS: </strong>{$fila['pais']}</p>";
                    echo "<p><strong>PROVINCIA: </strong>{$fila['provincia']}</p>";
                    echo "<p><strong>POBLACION: </strong>{$fila['poblacion']}</p>";
                    echo "<p><strong>CODIG OPOSTAL: </strong>{$fila['codigoPostal']}</p>";
                    echo "<p><strong>DIRECCION: </strong>{$fila['direccion']}</p>";
                    echo "<p><strong>TIPO DE IVA: </strong>{$fila['TieneIvaExentoIntracomunitario']}</p>";
                    echo "<p><strong>RECARGO DE EQUIVALENCIA: </strong>{$fila['TieneRecargoEquivalencia']}</p>";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="tab-pane fade" id="pedidos" role="tabpanel" aria-labelledby="pedidos-tab">
            </div>
        </div>

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
<script src="js/admin-escritorio.js"></script>