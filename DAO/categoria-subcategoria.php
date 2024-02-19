<?php
require_once '../includes/config.php';

$sql = "SELECT * FROM fichaempresametas limit 1/* WHERE id_categoria =?*/";
$query = $conexion_formularios->prepare($sql);
// $query->bindParam(1, $_POST['categoria'], PDO::PARAM_INT);
$query->execute();

$htmlOptions = '<option value="0">SUBCATEGORIA</option>';

if ($query->rowCount() > 0) {
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $htmlOptions .= '<option value="' . $row['idfichaempresa'] . '">' . $row['nombreComercial'] . '</option>';
    }
} else {
    $htmlOptions .= '<option disabled>No hay subcategorías disponibles</option>';
}

// Devolver el HTML generado como respuesta AJAX
echo $htmlOptions;
