<?php
require_once '../includes/config.php';
$use_carousel = false;
include_once '../includes/head.php';
?>
<div class="pregfrecuentes-background">
    <!-- barra navegacion -->
    <?php
    include_once '../includes/navbar.php';
    ?>
    <div class="cta-section">
        <div class="preguntas-frecuentes-container">
            <img src="../images/fotos/preguntas_frecuentes/imagenes/preguntas_frecuentes.png"
                alt="Preguntas frecuentes">
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">¿DÓNDE ESTÁN UBICADOS LOS PARQUES STAR PARK Y CUÁLES SON SUS
                    HORARIOS?</div>
                <div class="faq-answer">
                    Star Park cuenta con diferentes sedes en Colombia. La ubicación, los horarios de atención y
                    las atracciones disponibles pueden variar según el parque y el centro comercial.
                    Ingresa a nuestra sección <strong><a href="parques.php"
                            style="text-decoration: none; color:white;">Parques,</a></strong> selecciona la sede que
                    deseas visitar y consulta su
                    dirección, horario, atracciones y datos de contacto actualizados.
                    <br><br>
                    <em>*Tener en cuenta que cada una de las atracciones tiene restricciones por lo que algunos
                        niños no podran acceder a algunas de ellas.</em>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">¿QUÉ ATRACCIONES PUEDO ENCONTRAR EN LOS PARQUES STAR PARK?</div>
                <div class="faq-answer">
                    La oferta de atracciones varía según la sede que visites. En todos nuestros parques
                    encontrarás videojuegos y, dependiendo de la ubicación, podrás disfrutar de experiencias
                    como rueda de la fortuna, simuladores de realidad virtual, carros chocones, muros de
                    escalar e interactivos, zonas de trampolines, Time Pump y muchas más.
                    Para conocer las atracciones disponibles, visita la sección <strong><a href="parques.php"
                            style="text-decoration: none; color:white;">parques</a></strong> de nuestra página web
                    y descubre todo lo que ofrece cada sede, o acércate directamente a tu parque Star Park
                    favorito.
                    <br>
                    <p>Aplican TYC. La disponibilidad de las atracciones puede variar según la sede y estar sujeta
                        a horarios de operación o mantenimiento. Cada atracción cuenta con restricciones de
                        estatura y condiciones de uso que deben cumplirse obligatoriamente.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">¿QUÉ RESTRICCIONES DE EDAD Y ESTATURA TIENEN LAS ATRACCIONES?</div>
                <div class="faq-answer">
                    El ingreso a las atracciones depende de la estatura del niño o la niña y de las condiciones
                    de seguridad establecidas para cada una.
                    Como referencia general, la estatura mínima de ingreso es de <strong>100 cm</strong>. Algunas zonas,
                    como el Playground, también cuentan con una estatura máxima permitida, que puede ser de
                    hasta <strong> 130 cm</strong>.

                    Antes de ingresar, nuestro personal verificará el cumplimiento de los requisitos
                    correspondientes. Es obligatorio respetar los reglamentos, las indicaciones del operador y
                    las normas de seguridad de cada atracción.
                    Las restricciones de estatura y uso pueden variar según la atracción y la sede seleccionada.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">¿CUÁNTO CUESTAN LAS ATRACCIONES Y LOS VIDEOJUEGOS?</div>
                <div class="faq-answer">
                    Los precios de nuestras atracciones y videojuegos se encuentran entre $3.000 y $14.900. El
                    valor puede variar según el tipo de experiencia, la atracción o el videojuego seleccionado y
                    la sede Star Park que visites.
                    También puedes elegir el valor de recarga que mejor se adapte a tu presupuesto y utilizar el
                    saldo disponible en las atracciones y videojuegos habilitados en el parque.
                    Para conocer los precios exactos, paquetes y opciones disponibles, consulta directamente
                    en la taquilla de tu sede favorita.
                    <p>Aplican TYC. Los valores pueden variar según la sede y están sujetos a cambios.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">¿QUÉ MEDIOS DE PAGO MANEJAN?</div>
                <div class="faq-answer">
                    En nuestras sedes Star Park puedes realizar tus pagos en <strong>efectivo</strong> o con
                    <strong>tarjetas débito</strong> y
                    <strong>crédito.</strong>
                    Actualmente, no recibimos pagos mediante Nequi, transferencias bancarias ni otras
                    billeteras digitales.
                    La disponibilidad de los medios de pago está sujeta al funcionamiento de las plataformas y
                    datáfonos de cada sede.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">¿CÓMO PUEDO HACER USO DE LAS ATRACCIONES Y VIDEOJUEGOS DEL
                    PARQUE?</div>
                <div class="faq-answer">
                    El sistema de acceso depende de la sede que visites:
                    <strong>Tarjeta recargable Star Park:</strong> puedes adquirirla en la taquilla por el valor
                    vigente, recargar
                    cuando quieras y utilizarla en atracciones y videojuegos. En ella también se almacenan los
                    puntos de redención obtenidos en las máquinas identificadas, los cuales puedes cambiar
                    por premios en la taquilla.
                    <strong>Código de acceso:</strong> en las sedes de <strong>Bulevar Niza, Cúcuta y
                        Villavicencio</strong> no se utiliza
                    tarjeta. Debes crear tu cuenta a través del WhatsApp autorizado de la sede. Al registrarte,
                    automáticamente harás parte de <strong>Star Club</strong>, donde serás de los primeros en conocer
                    eventos y promociones exclusivas.
                    Desde tu cuenta podrás realizar recargas, obtener tu código de acceso, consultar tu saldo y
                    revisar los puntos de redención acumulados para cambiarlos por premios en la taquilla.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">¿PUEDO UTILIZAR MI TARJETA O CÓDIGO DE ACCESO EN TODAS LAS SEDES STAR
                    PARK?</div>
                <div class="faq-answer">
                    Sí. Puedes utilizar tu tarjeta Star Park en las sedes que operan con este sistema.
                    En las sedes Bulevar Niza, Villavicencio y Cúcuta utilizamos códigos de acceso en lugar de
                    tarjeta física. Estos códigos pueden utilizarse en los parques que manejan este sistema.
                    Si ya tienes una tarjeta Star Park y deseas disfrutar de alguna de estas tres sedes, debes
                    registrarte previamente en nuestro Star Club a través de WhatsApp.
                    Recuerda que las atracciones, los precios y las promociones pueden variar según la sede
                    que visites.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">¿EL SALDO Y LOS PUNTOS ACUMULADOS TIENEN FECHA DE VENCIMIENTO?</div>
                <div class="faq-answer">
                    No. El saldo y los tickets acumulados en tu tarjeta Star Park no tienen fecha de vencimiento.
                    Puedes conservar tu tarjeta y utilizarla en una próxima visita.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">¿QUÉ ES STAR CLUB?</div>
                <div class="faq-answer">
                    Star Club es la comunidad exclusiva de Star Park, creada para que seas de los primeros en
                    conocer nuestras promociones, eventos y beneficios especiales.
                    Al registrarte, podrás recibir novedades y oportunidades exclusivas para disfrutar aún más
                    cada visita al parque.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">¿QUÉ EVENTOS Y PROMOCIONES ESPECIALES TIENE STAR PARK?</div>
                <div class="faq-answer">
                    En Star Park realizamos diferentes eventos, promociones y actividades especiales durante
                    el año. Dependiendo de la sede y de la programación de cada mes, podrás encontrar
                    jornadas con varias horas de diversión, beneficios en atracciones y videojuegos, dinámicas,
                    refrigerios, obsequios y experiencias para compartir en familia.
                    La programación, los precios, los beneficios y la disponibilidad pueden variar según el
                    parque. Para conocer las promociones vigentes, consulta nuestros canales oficiales, visita
                    la sección de promociones de nuestra página web o acércate a la taquilla de tu sede Star
                    Park favorita.
                    Algunos eventos requieren reserva previa y cuentan con cupos limitados, por lo que te
                    recomendamos consultar la información y adquirir tu cupo con anticipación.
                    <p> Aplican TYC. Las atracciones cuentan con restricciones de estatura y uso. Todos los
                        visitantes deben cumplir los reglamentos y las normas de seguridad del parque.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">¿STAR PARK REALIZA FIESTAS INFANTILES, QUÉ INCLUYEN Y CÓMO PUEDO
                    RESERVAR?</div>
                <div class="faq-answer">
                    En Star Park ofrecemos diferentes planes de fiestas infantiles para que la celebración de tu
                    hijo sea inolvidable. Según el plan elegido, la experiencia puede incluir salón con decoración
                    exclusiva, recreación, horas de diversión en atracciones y videojuegos, y otros beneficios
                    especiales.
                    Para conocer los planes disponibles y reservar tu evento, acércate a la taquilla de tu parque
                    Star Park favorito o también puedes hacerlo comunicándote al <a href="https://wa.me/573228264406"
                        style="text-decoration: none; color:white;"><strong>3228264406</strong></a> <br>
                    <em> Aplican TYC. Las atracciones cuentan con restricciones de estatura y uso. Todos los
                        visitantes deben cumplir los reglamentos y las normas de seguridad del parque.</em>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">¿QUÉ EVENTOS Y PROMOCIONES ESPECIALES TIENE STAR PARK?</div>
                <div class="faq-answer">
                    En Star Park realizamos diferentes eventos, promociones y actividades especiales durante
                    el año. Dependiendo de la sede y de la programación de cada mes, podrás encontrar
                    jornadas con varias horas de diversión, beneficios en atracciones y videojuegos, dinámicas,
                    refrigerios, obsequios y experiencias para compartir en familia.
                    La programación, los precios, los beneficios y la disponibilidad pueden variar según el
                    parque. Para conocer las promociones vigentes, consulta nuestros canales oficiales, visita
                    la sección de promociones de nuestra página web o acércate a la taquilla de tu sede Star
                    Park favorita.
                    Algunos eventos requieren reserva previa y cuentan con cupos limitados, por lo que te
                    recomendamos consultar la información y adquirir tu cupo con anticipación.
                    <p> Aplican TYC. Las atracciones cuentan con restricciones de estatura y uso. Todos los
                        visitantes deben cumplir los reglamentos y las normas de seguridad del parque.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">¿STAR PARK REALIZA EVENTOS EMPRESARIALES, ESCOLARES O PARA GRUPOS?</div>
                <div class="faq-answer">
                    Sí. Contamos con paquetes especiales diseñados para vivir experiencias de integración,
                    aprendizaje y diversión en nuestras instalaciones.
                    Según el tipo de evento, la sede y el paquete seleccionado, la experiencia puede incluir
                    horas de entretenimiento en atracciones y videojuegos, recreación, refrigerios y actividades
                    especiales. También podemos adaptar algunas opciones de acuerdo con las necesidades,
                    el número de participantes y el objetivo de cada grupo.
                    Estas experiencias son ideales para jornadas de bienestar empresarial, actividades de
                    integración, celebraciones corporativas, de colegios, jardines infantiles y encuentros
                    grupales.
                    Para conocer, cotizar o reservar los paquetes disponibles, consulta en la taquilla de tu
                    parque Star Park favorito o comunícate al
                    <a href="https://wa.me/573228264406"
                        style="text-decoration: none; color:white;"><strong>3228264406</strong></a>.
                    Aplican TYC. Las atracciones cuentan con restricciones de estatura y uso. Todos los
                    visitantes deben cumplir los reglamentos y las normas de seguridad del parque
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">¿CÓMO PUEDO POSTULARME PARA TRABAJAR EN STAR PARK?</div>
                <div class="faq-answer">
                    Si deseas formar parte de nuestro equipo operativo en parques y te caracterizas por ser una
                    persona proactiva, con vocación de servicio y una actitud enérgica y positiva, envíanos tu
                    hoja de vida al correo <strong>gh@gmail.com.co</strong>.
                    Nuestro equipo de Gestión Humana revisará tu perfil y se pondrá en contacto contigo
                    cuando se encuentre disponible una vacante acorde con tu experiencia.
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const preguntas = document.querySelectorAll('.faq-question');

                    preguntas.forEach(pregunta => {
                        pregunta.addEventListener('click', () => {
                            const respuesta = pregunta.nextElementSibling;
                            respuesta.classList.toggle('active');
                            pregunta.classList.toggle('open');
                        });
                    });
                });
            </script>

        </div>

    </div>
    <div class="footersup">
        <img src="../images/fotos/Home/imagenes/Footer2.png" alt="">
    </div>
</div>
<!-- Botones de whatsapp y dominick, lado derecho -->


<?php
// Incluye el footer
include_once '../includes/footer.php';
?>