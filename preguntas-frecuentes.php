<?php
require_once 'includes/config.php';
require_once 'clases/AES.php';
require_once 'includes/header.php';
?>

<div class="primary">
    <article>
        <section class="section-title-pf">
            <div class="column-gap-default gap-max-width">
                <div class="element-populated">
                    <h2 class="title-pf">Preguntas frecuentes</h2>
                </div>
            </div>
        </section>
        <section class="section-boxed mb-20">
            <div class="column-gap-default">
                <div class="accordion" id="accordionFAQ">
                    <div class="accordion-item">
                        <p class="accordion-header" id="FAQ1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                ¿HAY QUE REGISTRARSE PARA HACER UN PEDIDO?
                            </button>
                        </p>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="FAQ1" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Sí, pero no implica ningún compromiso para usted, no recibirá ningún tipo de publicidad ni Newsletter si no le interesa. Es requerido para sus datos de envío.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <p class="accordion-header" id="FAQ2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                ¿CÓMO SE HACE UN PEDIDO?
                            </button>
                        </p>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="FAQ2" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                – Seleccionar artículos deseados, selecionar colores o cualquier variación (talla, metros, etc..) si lo requiere y pulsar comprar indicando la cantidad.<br>

                                – Una vez estén todos los artículos seleccionados ir a ver el carrito en la parte superior derecha del sitio web.<br>

                                – Si están todos los datos de la compra correctos , clickar “finalizar compra”.<br>

                                – Si ya es cliente aparecerán todos sus datos introducidos. Si desea que se realice el envío a una dirección diferente puede darle a la pestaña y rellene los nuevos datos de envío.<br>
                                -Si están todos los datos correctos y está conforme con todo, haga click a he leído estoy de acuerdo con los términos y condiciones de la web y clikar a “Realizar el pedido”.<br>

                                – Se le redireccionará a la pasarela de pago de Redsys de pago seguro donde le darán las indicaciones para realizar el pago.<br>
                                ¡Ojo! Habrás observado cambios a la hora de pagar con tarjeta bancaria. El proceso de compra segura dependerá del banco emisor, consulta con el tuyo tu operativa para estar preparado antes de realizar tus próximas compras. Si no tienes activas las compras online con tu banco , no te dejará realizar la compra.<br>
                                – Realice el pago.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <p class="accordion-header" id="FAQ3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                ¿PUEDO CANCELAR UN PEDIDO?
                            </button>
                        </p>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="FAQ3" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Una vez que se ha realizado un pedido y se ha pagado no se puede cancelar desde el sitio web. Para cancelar un pedido fallido escriba a ventas@tiendadetelasyfornituras.com. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <p class="accordion-header" id="FAQ4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                NECESITO UNA FACTURA
                            </button>
                        </p>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="FAQ4" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                En el formulario inicial de registro, se indica si se requiere factura. En el envío del pedido se le enviará la factura.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <p class="accordion-header" id="FAQ5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                ¿CÓMO PUEDO PAGAR MI PEDIDO?
                            </button>
                        </p>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="FAQ5" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p>
                                    Podrás pagar sin cargo adicional por nuestra parte mediante tarjeta de crédito o débito. Puedes pagar con tarjeta VISA, VISA Electrón, MasterCard, Maestro, 4B y Red 6000.
                                </p><br>
                                <p>
                                    Durante la realización del pago entrará a una página web segura de nuestra entidad financiera, donde se le solicitará el número de su tarjeta y la fecha de caducidad.
                                </p><br>
                                <p>
                                    Para su tranquilidad, se le garantiza una absoluta seguridad, ya que tanto sus datos personales como los de su tarjeta viajan encriptados gracias al servidor seguro SSL proporcionado por esta entidad financiera.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <p class="accordion-header" id="FAQ6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                ¿CUÁNTO TARDA EN LLEGAR EL ENVÍO DE MI PEDIDO?
                            </button>
                        </p>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="FAQ6" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <ul>
                                    <li>España entre 3 y 5 días laborales salvo Islas, Ceuta y Melilla con un periodo de hasta 7 días laborales.</li>
                                    <li>Para envíos a países de Europa entre 4 y 10 días laborares.</li>
                                    <li>Para otros destinos contactar con nuestro departamento de ventas escribiendo a ventas@tiendadetelasyfornituras.com.</li>
                                </ul>
                                <p>
                                    Los plazos indicados no incluyen las demoras por trámites aduaneros, tanto en origen como destino.
                                </p>
                                <p>
                                    Cualquiera que fuera el retraso en la entrega de mercancía no será motivo de reclamación alguna a Borman Industria Textil SL.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <p class="accordion-header" id="FAQ7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                ¿EXISTE UN IMPORTE MÍNIMO DE PEDIDO?
                            </button>
                        </p>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="FAQ7" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                No existe importe mínimo de pedido.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <p class="accordion-header" id="FAQ8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                YA ME HA LLEGADO PERO ESTÁ INCOMPLETO O HA LLEGADO EN MAL ESTADO, ¿QUÉ HAGO?
                            </button>
                        </p>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="FAQ8" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Si por cualquier circunstancia hemos cometido un error, por favor comunícanoslo por escrito a través de nuestro correo electrónico ventas@tiendadetelasyfornituras.com dentro de los 14 días naturales siguientes a la recepción del pedido. Una vez analizada y aceptada su reclamación por el departamento de incidencias, se gestionará la recogida de la mercancía en la dirección indicada y se realizará el abono o cambio una vez recibida y revisada la mercancía.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-boxed">
            <div class="column-gap-default gap-max-width">
                <div class="element-populated">
                    <p>En el caso de que aquí no encuentres ninguna respuesta a tus preguntas, ¡ponte en contacto, por favor, con <br>nuestro<a href="https://textilforms.com/contacto-logout?<?= PHP_AES_Cipher::encrypt("idioma=ES&web=12") ?>" target="_blank" rel="noopener">servicio de atención al cliente</a>!.</p>
                </div>
            </div>
        </section>
    </article><!-- #post-## -->
</div> <!-- ast- -->

<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>