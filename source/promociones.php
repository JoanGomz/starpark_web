<?php
require_once '../includes/config.php';
$use_carousel = false;
$use_carouselParque = true; // Se eliminó la duplicación
include_once '../includes/head.php';

$medios_promociones = [
    'https://bucketmarketingstarpark.s3.amazonaws.com/chat-files/1787610040_PROMO-1.jpg',
    'https://bucketmarketingstarpark.s3.amazonaws.com/chat-files/1787610054_PROMO-2.jpg',
    'https://bucketmarketingstarpark.s3.amazonaws.com/chat-files/1787610070_PROMO-3.jpg',
    'https://bucketmarketingstarpark.s3.amazonaws.com/chat-files/1787610090_PROMO-4.jpg',
];
?>
<style>
    .promo-carousel {
        position: relative;
        width: 100%;
        max-width: 1100px;
        height: 520px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .boton-centro {
        z-index: 11;
        position: relative;
        top: 18rem;
    }

    .promo-carousel-items {
        position: relative;
        width: 100%;
        height: 420px;
        top: 1rem;
        left: -254px;
    }

    .comandcenter img {
        width: 120rem;
        height: 111rem;
        position: absolute;
        top: -176px;
        left: 0;
        z-index: 11;
    }

    /* --- ESTILOS PLANOS 2D PARA LAS TARJETAS --- */

    /* 2. Base plana para los ítems */
    .promo-carousel-items .park-carousel-item {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 550px;
        height: 380px;
        transition: transform 0.4s ease-out, opacity 0.4s ease-out;
        pointer-events: none;
    }

    /* 3. Ajuste de la imagen interna (se corrigió el 153vw) */
    .park-image-media-promo {
        width: auto;
        height: 114vh;
        object-fit: cover;
        display: block;
    }

    /* 4. Estado Centrado (Activa) */
    .promo-carousel-items .park-carousel-item.active {
        opacity: 1;
        z-index: 10;
        pointer-events: auto;
    }

    /* 5. Estado Derecha (Siguiente - Plana) */
    .promo-carousel-items .park-carousel-item.next {
        opacity: 0.6;
        z-index: 5;

    }

    /* 6. Estado Izquierda (Anterior - Plana) */
    .promo-carousel-items .park-carousel-item.prev {
        opacity: 0.6;
        z-index: 5;

    }

    /* 7. Ocultar tarjetas lejanas */
    .promo-carousel-items .park-carousel-item.far-next,
    .promo-carousel-items .park-carousel-item.far-prev,
    .promo-carousel-items .park-carousel-item.back {
        opacity: 0;
        z-index: 1;

    }

    /* --- CONTROLES Y NAVEGACIÓN --- */
    .carousel-controls {
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 34rem;
        margin-top: 10px;
        z-index: 12;
        top: 32rem;
    }

    .carousel-prev-promo,
    .carousel-next-promo {
        background: none;
        border: none;
        cursor: pointer;
        transition: transform 0.2s ease;
        padding: 0;
        display: flex;
        align-items: center;
    }

    .carousel-prev-promo img,
    .carousel-next-promo img {
        height: 89px;
        width: auto;
    }

    .carousel-indicators-promo {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .carousel-indicators-promo .indicator {
        width: 12px;
        height: 12px;
        background: rgb(149, 160, 160);
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    .carousel-indicators-promo .indicator.active {
        background: rgb(59, 255, 255);
        transform: scale(1.3);
    }

    .carousel-prev-promo:hover,
    .carousel-next-promo:hover {
        transform: scale(1.1);
    }

    @media (max-width: 414px) and (max-width: 427px) {
        .promo-carousel-items .park-carousel-item {
            width: 250px;
            height: 176px;
        }

        .promo-carosuel-container {
            width: 90%;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        .promo-carousel-items .park-carousel-item.active {
            position: relative;
            top: 2rem;
        }

        .boton-centro {
            top: -16.5rem;
        }

        .carousel-controls {
            top: -24.6rem;
            gap: 2rem;
        }
    }

    @media (max-width: 430px) {
        .park-image-media-promo {
            width: 162%;
            height: 161%;
            top: -17rem;
            left: 114px;
            position: relative;
        }

        .promo-carousel-items {
            top: 16rem;
        }

        .promo-carousel-items .park-carousel-item {
            width: 280px;
            height: 180px;
        }

        .carousel-controls {
            top: -16rem;
            gap: 7rem;
        }

        .comandcenter img {
            width: 41rem;
            height: auto;
            top: -32px;
            z-index: 11;
        }

        .boton-centro {
            top: -7.5rem;
        }

        .carousel-prev-promo img,
        .carousel-next-promo img {
            height: 43px;
            width: auto;
            position: relative;
            top: 6rem;
        }
    }

    @media (min-width:300px) and (max-width:390px) {
        .promo-carousel-items {
            top: 41rem;
            height: 48px;
        }

        .carousel-controls {
            top: -6rem;
            gap: 10rem;
        }

        .park-image-media-promo {
            height: 125%;
        }

        .boton-centro {
            top: 21.5rem;
        }

        .boton-centro img {
            top: -55.9rem !important;
        }

        .fooder-promo img {
            top: -42rem;
        }

    }

    @media (min-width: 1920px) and (min-height: 1113px) {
        .fooder-promo img {
            position: relative;
            top: 18rem;
        }

        .comandcenter img {
            top: -154px;
        }

        .promo-carousel-items {
            top: 3rem;
        }

        .park-image-media-promo {
            height: 97vh;
        }
    }

    @media(min-width:440px) and (max-width:500px) {
        .promo-carosuel-container {
            overflow: hidden;
        }

        .comandcenter img {
            width: 44rem;
            height: 40rem;
            top: -41px;
        }

        .carousel-prev-promo,
        .carousel-next-promo {
            position: relative;
            top: 7rem;
        }

        .carousel-prev-promo img,
        .carousel-next-promo img {
            height: 42px;
        }

        .park-image-media-promo {
            height: 31vh;
            top: -14rem;
            left: -3rem;
            position: relative;
        }

        .boton-centro {
            left: 1rem;
            top: -17rem;
        }

        .carousel-controls {
            gap: 8rem;
            top: -25rem;
        }

        .fooder-promo img {
            top: -32rem;
            transform: rotate(1deg);
        }

        .promociones-content .title-promociones img {
            top: 1rem;
        }
    }

    @media (min-width:384px) and (max-width:400px) and (max-height:854px) and (max-height:860px) {
        .fooder-promo img {
            top: -35rem;
            width: 101%;
            left: -1rem;
        }

        .boton-centro {
            top: 24.5rem;
        }
    }

    @media (min-width:390px) and (max-width:400px) {
        .promo-carousel-items {
            top: 44rem;
            height: 140px;
        }

        .carousel-controls {
            top: -7rem;
        }

        .promociones-content .boton-centro img {
            top: -20.1rem;
        }

        .park-image-media-promo {
            height: 125%;
        }

        .fooder-promo img {
            top: -34rem;
        }
    }
</style>

<!-- Pagina de Promociones -->
<main class="promociones-space-background">
    <!-- Barra de navegación -->
    <?php include_once '../includes/navbar.php'; ?>

    <article class="promociones-content">
        <!-- Título principal -->
        <div class="title-promociones">
            <img src="../images/fotos/promociones/imagenes/promociones.png" alt="Nuestras promociones">
        </div>

        <div class="content" style="justify-content: center; display: flex; position: relative;">
            <div class="comandcenter">
                <img src="https://bucketmarketingstarpark.s3.amazonaws.com/chat-files/1784736355_centro_de_control.png"
                    alt="">
            </div>
            <div class="promo-carousel-container">

                <!-- Sanitización correcta del JSON mediante htmlspecialchars -->
                <div class="galeria-container-promo"
                    data-imagenes="<?php echo htmlspecialchars(json_encode($medios_promociones), ENT_QUOTES, 'UTF-8'); ?>">
                    <article class="promo-carousel">

                        <!-- Contenedor dinámico generado por JS -->
                        <div class="promo-carousel-items"></div>

                        <!-- Botones e Indicadores agrupados abajo -->
                        <div class="carousel-controls">
                            <button class="carousel-prev-promo" aria-label="Anterior">
                                <img src="./images/fotos/promociones/imagenes/izq.png" alt="Anterior">
                            </button>

                            <div class="carousel-indicators-promo"></div>

                            <button class="carousel-next-promo" aria-label="Siguiente">
                                <img src="./images/fotos/promociones/imagenes/der.png" alt="Siguiente">
                            </button>
                        </div>

                    </article>
                </div>

            </div>
        </div>

        <!-- Llamado a la acción -->
        <div class="boton-centro">
            <img src="../images/fotos/promociones/imagenes/centro.png" alt="Nuestras promociones">
        </div>

        <div class="fooder-promo">
            <img src="../images/fotos/Home/imagenes/Footer2.png" alt="Decoración de fondo">
        </div>

    </article>
</main>

<!-- Contenedor del footer general -->
<?php include_once '../includes/footer.php'; ?>