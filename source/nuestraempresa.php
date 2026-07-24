<?php
require_once '../includes/config.php';
$use_carousel = false;
include_once '../includes/head.php';
?>
<div class="nempresa-space-background">
    <!-- barra navegacion -->
    <?php
    include_once '../includes/navbar.php';
    ?>
    <div class="main-title">
        <img src="../images/fotos/quienes_somos/imagenes/quienes_somos.png" alt="Nuestra Empresa">
    </div>
    <div class="about-container">

        <div class="content-wrapper">
            <!-- Dominic animado -->
            <div class="dominic-container">
                <div class="dominic">
                    <img src="../images/fotos/quienes_somos/imagenes/dominic.png" alt="Star Park Mascota">
                </div>
            </div>

            <!-- Contenido -->
            <div class="text-content">
                <h2>Centros de entretenimiento para jugar y disfrutar en familia</h2>

                <p>Hace más de 30 años que un visionario —quien también dedicó parte de su vida a la enseñanza
                    universitaria— decidió transformar su pasión por la alegría y el aprendizaje en un lugar donde las
                    familias pudieran vivir momentos inolvidables. Durante nuestros inicios, dos atracciones marcaron el
                    camino: el emblemático carrusel, que transportaba a los niños a mundos mágicos de princesas y
                    caballeros, y la rueda, que elevaba la emoción y la imaginación de miles de visitantes hacia el
                    espacio fantástico.</p>

                <p>Con el paso del tiempo, los niños crecieron y sus sueños también. En Star Park evolucionamos
                    constantemente, incorporando nuevas atracciones, mejorando nuestra infraestructura y ampliando la
                    oferta de entretenimiento para que niños, jóvenes y familias completas encuentren un lugar para
                    divertirse juntos.</p>

                <p>Pero nuestra historia también está llena de magia intergaláctica. Cuenta la leyenda que Dominic,
                    nuestro explorador espacial, llegó desde el planeta Clay con la misión de encontrar un lugar donde
                    conectar la fantasía de su hogar con la Tierra. Al descubrir la alegría y creatividad de nuestro
                    planeta, decidió fundar Star Park, expandiendo una red de estaciones donde cada risa aumenta la
                    magia y cada visita se convierte en un recuerdo para toda la vida.</p>

                <p>Hoy en día, el objetivo sigue siendo el mismo. Actualmente contamos con 11 parques en Colombia,
                    ubicados en importantes centros comerciales:</p>

                <div class="locations-dominic">
                    <div class="locations">
                        <p><strong>Bogotá:</strong> Hayuelos, Ecoplaza, Bulevar, Altavista y Paseo Villa del Río.</p>
                        <p><strong>Antioquia:</strong> Puerta del Norte (Bello) y Mayorca (Sabaneta).</p>
                        <p><strong>Neiva:</strong> San Pedro Plaza.</p>
                        <p><strong>Cali:</strong> Cosmocentro.</p>
                        <p><strong>Cúcuta:</strong> Jardín Plaza.</p>
                        <p><strong>Villavicencio:</strong> Viva.</p>
                    </div>
                    <!-- Dominic animado -->
                    <div class="dominic-container dominic-mobile">
                        <div class="dominic">
                            <img src="../images/fotos/quienes_somos/imagenes/dominic.png" alt="Star Park Mascota">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="footer-company">
    <img src="../images/fotos/Home/imagenes/Footer2.png" alt="">
</div>
<?php
// Incluye el footer
include_once '../includes/footer.php';
?>