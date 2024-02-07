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

    <title>Mi cuenta</title>
    <?php
    require_once 'includes/header.php';
    ?>
    <div class="container">
        <main>
            <article>
                <h1 class="entry-title">Mi cuenta</h1>
                <div class="entry-content clear">
                    <div class="mensaje-login">
                        <p>Tú decides cúando empezar a comprar.<br>Solo tienes que registrarte y comenzar a disfrutar de las ventajas que te ofrecemos en Borman</p>
                    </div>
                    <div class="row">
                        <div class="col col-mc">
                            <h2>Acceder</h2>
                            <form class="form-login login" method="POST" action="">
                                <div class="mb-3">
                                    <label class="form-label" for="login_email">Correo electrónico<span class="required"> *</span></label>
                                    <input type="text" class="form-control" name="login_email" id="login_email" autocomplete="email" value="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="password">Contraseña<span class="required"> *</span></label>
                                    <span class="password-input"><input class="form-control" type="password" name="login_password" id="login_password" autocomplete="current-password"></span>
                                </div>
                                <div class="mb-3 button-container">
                                    <button type="submit" class="btn button-basic" name="login">Acceso</button>
                                </div>
                                <div class="mb-3">
                                    <a href="lost-password">¿Olvidaste la contraseña?</a>
                                </div>
                            </form>
                        </div>

                        <div class="col col-mc">
                            <h2>Registrarse</h2>
                            <form method="POST" action="" class="form-register register" enctype="multipart/form-data">
                                <input id="actividadesSeleccionadas" name="actividadesSeleccionadas[]" value="" hidden>
                                <div class="mb-3">
                                    <label class="form-label" for="reg_nombrecomercial">Nombre y apellidos<span class="required"> *</span></label>
                                    <input class="form-control" type="text" name="reg_nombrecomercial" id="reg_nombrecomercial">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="reg_email">Dirección de correo electrónico<span class="required"> *</span></label>
                                    <input type="email" class="form-control" name="reg_email" id="reg_email" autocomplete="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="reg_password">Contraseña<span class="required"> *</span></label>
                                    <span class="password-input"><input type="password" class="form-control" name="reg_password" id="reg_password" autocomplete="new-password"></span>
                                </div>
                                <div class="mb-3">
                                    <label>¿Cuál es la actividad a la que se dedica tu empresa? Selecciona una de las siguientes opciones.<span class="required"> *</span></label>
                                    <div class="contenedor-scroll">
                                        <div class="row p-l-30">
                                            <?php
                                            try {
                                                $sql = "SELECT idActividad, descripcion 
                                                    FROM actividad_has_webs 
                                                    INNER JOIN Actividad ON Actividad.idActividad = actividad_has_webs.actividad_idActividad
                                                    WHERE webs_web = 'Tienda de telas y fornituras'
                                                    ORDER BY descripcion";
                                                $query = $conexion_prgborman->prepare($sql);
                                                $query->execute();
                                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                            } catch (Exception $e) {
                                            } ?>

                                            <?php foreach ($results as $result) {
                                            ?>
                                                <div class="form-check-label col-lg-6 col-md-6 col-sm-12" style="display: flex; align-items: center;">
                                                    <label class="form-check-label" for="actividad<?= $result->idActividad ?>">
                                                        <input type="checkbox" class="form-check-input" name="actividades[]" id="actividad<?= $result->idActividad ?>" value="<?= $result->idActividad ?>">
                                                        <?= $result->descripcion ?>
                                                    </label>
                                                </div>
                                            <?php
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="conocido" class="form-label text-label">¿Cómo nos has encontrado? <span class="required"> *</span></label>
                                    <select class="form-select" id="conocido" name="conocido">
                                        <option value="" disabled="disabled" selected="selected">Elige una opción</option>
                                        <?php
                                        try {
                                            $sql = "SELECT mediodepesca_comonosconocio.id, mediodepesca_comonosconocio.descripcion 
                                                FROM prg_borman.mediodepesca_comonosconocio 
                                                inner join mediodepesca_comonosconocio_has_idiomas id ON id.mediodepesca_comonosconocio_id = mediodepesca_comonosconocio.id
                                                WHERE mediodepesca_comonosconocio.web=1 AND mediodepesca=1 AND marcas_idMarca=12 AND idioma = 'ES'
                                                ORDER BY descripcion";
                                            $query = $conexion_prgborman->prepare($sql);
                                            // $query->bindParam(1, $_SESSION['idioma'], PDO::PARAM_STR);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        } catch (Exception $e) {
                                        }

                                        foreach ($results as $result) {
                                        ?>
                                            <option value="<?= $result->id; ?>"><?= $result->descripcion ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-row form-row-wide" title="">
                                    <label class="form-label">Si estás sujeto al régimen especial de recargo de equivalencia selecciona "Cliente con RE"</label>
                                    <select class="form-select">
                                        <option value="" disabled="disabled" selected="selected">Selecciona</option>
                                        <option value="customer">Cliente</option>
                                        <option value="cliente_re">Cliente con RE</option>
                                    </select>
                                </div>
                                <div class="privacy-policy-text">
                                    <p>Tus datos personales se utilizarán para procesar tu pedido, mejorar tu experiencia en esta web, gestionar el acceso a tu cuenta
                                        y otros propósitos descritos en nuestra
                                        <a href="https://www.tiendadetelasyfornituras.com/politica-privacidad/" class="-privacy-policy-link" target="_blank">
                                            política de privacidad</a>. <br>Si no puedes realizar la compra de algún producto, es posible que debas eliminar la caché del
                                        navegador que estés utilizando.
                                    </p>
                                </div>
                                <div class="mb-3 button-container">
                                    <button type="submit" class="btn button-basic" name="register" value="Registrarse">Registrarse</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </main>
    </div>

    <?php
    require_once 'includes/footer.php';
    require_once 'includes/scripts.php';
    ?>