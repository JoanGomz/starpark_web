<?php
require_once '../includes/config.php';
$use_carousel = false;
include_once '../includes/head.php';
?>
<style>
    :root {
        --bg-overlay: rgba(15, 23, 42, 0.7);
        --bg-modal: #1e293b;
        --color-texto: #f8fafc;
        --color-secundario: #94a3b8;
        --color-error: #ef4444;
        --color-success: #10b981;
    }

    .pop-up-success,
    .pop-up-error {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background-color: var(--bg-overlay);
        backdrop-filter: blur(8px);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;

        opacity: 1;
        transition: opacity 0.3s ease;
    }

    .pop-up-success .pop-up-contenido,
    .pop-up-error .pop-up-contenido {
        background: linear-gradient(169deg, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        width: 90%;
        max-width: 420px;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
        text-align: center;

        transform: scale(1);
        animation: popIn 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }


    .pop-up-error .pop-up-contenido {
        border-top: 4px solid rgb(255, 11, 11);
    }

    .pop-up-success .pop-up-contenido {
        border-top: 4px solid rgb(5, 243, 164);
    }

    .pop-up-icono {
        font-size: 3.5rem;
        margin-bottom: 15px;
    }


    .pop-up-error .pop-up-icono {
        color: var(--color-error);
    }

    .pop-up-success .pop-up-icono {
        color: var(--color-success);
    }

    .pop-up-titulo {
        color: var(--color-texto);
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .pop-up-mensaje {
        color: white;
        text-shadow: -9px 8px 4px black;
        font-size: 0.95rem;
        line-height: 1.5;
        margin-bottom: 25px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .pop-up-btn {
        display: inline-block;
        color: white;
        text-decoration: none;
        padding: 12px 30px;
        font-weight: 600;
        border-radius: 8px;
        font-size: 0.95rem;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        transition: background-color 0.2s ease, transform 0.1s ease;
    }


    .pop-up-error .pop-up-btn {
        background-color: var(--color-error);
        box-shadow: 0 4px 6px -1px rgba(239, 68, 68, 0.3);
    }

    .pop-up-error .pop-up-btn:hover {
        background-color: #dc2626;
        transform: translateY(-1px);
    }

    .pop-up-success .pop-up-btn {
        background-color: var(--color-success);
        box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.3);
    }

    .pop-up-success .pop-up-btn:hover {
        background-color: #059669;
        transform: translateY(-1px);
    }

    .pop-up-btn:active {
        transform: translateY(1px);
    }

    @keyframes popIn {
        from {
            transform: scale(0.8);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }
</style>
<div class="servicio-space-background">
    <!-- barra navegacion -->
    <?php
    include_once '../includes/navbar.php';
    ?>
    <!-- contenedor principal con la imagen y formulario -->
    <main class="main-container-servicio">
        <section class="servicio-left">
            <img src="../images/fotos/servicio_al_cliente/imagenes/informacion.png" alt="Información">
        </section>

        <section class="servicio-right">
            <div class="service-form-container">
                <img src="../images/fotos/servicio_al_cliente/imagenes/servicio_al_cliente.png">

                <form class="serviceForm" action="EmailSAC.php" method="post">
                    <div class="service-form-input">
                        <div class="service-form-group">
                            <i class="fa-solid fa-circle-user"></i>
                            <input type="text" id="nombre" name="nombre" required>
                            <label for="nombre">Nombre</label>
                        </div>
                    </div>
                    <div class="service-form-input">
                        <div class="service-form-group">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="service-form-input">
                        <div class="service-form-group">
                            <i class="fa-solid fa-phone"></i>
                            <input type="tel" id="telefono" name="telefono" required>
                            <label for="telefono">Número telefónico</label>
                        </div>
                    </div>
                    <div class="service-form-input">
                        <div class="service-form-group">
                            <i class="fa-solid fa-location-dot"></i>
                            <select id="ubicacion" name="ubicacion" required>
                                <option value="" disabled selected></option>
                                <option value="Altavista">Altavista</option>
                                <option value="Bulevar Niza">Bulevar Niza</option>
                                <option value="Hayuelos">Hayuelos</option>
                                <option value="Paseo Villa del Rio">Paseo Villa del Río</option>
                                <option value="Bello">Bello</option>
                                <option value="Cali">Cali</option>
                                <option value="Mayorca">Mayorca</option>
                                <option value="Mosquera">Mosquera</option>
                                <option value="Neiva">Neiva</option>
                                <option value="Cúcuta">Cúcuta</option>
                                <option value="Villavicencio">Villavicencio</option>
                            </select>
                            <label for="ubicacion">Ubicación del parque</label>

                        </div>
                    </div>
                    <div class="service-form-input">
                        <div class="service-form-group">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <select id="ubicacion" name="tipo" required>
                                <option value="" disabled selected></option>
                                <option value="Peticion">Petición</option>
                                <option value="Queja">Queja</option>
                                <option value="Sugerencia">Segurencia</option>
                                <option value="Reclamo">Reclamo</option>
                            </select>
                            <label for="ubicacion">Peticiones, Quejas, Sugerencia o Reclamos
                            </label>

                        </div>
                    </div>
                    <div class="service-form-input">
                        <div class="service-form-group">
                            <i class="fa-solid fa-comment-dots"></i>
                            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
                            <label for="descripcion">Descripción</label>
                        </div>
                    </div>
                    <div class="contact-form-terms">
                        <input type="checkbox" class="terminos" id="terminos" name="terminos" required>
                        <label class="condiciones" for="terminos">APLICAN TERMINOS Y CONDICIONES
                        </label><br>

                        <div class="Terminos_adicionales">
                            <span>Antes de presentar una PQRS</span>
                            <span>Politica de tratamiento de datos</span>
                        </div>
                        <div class="Terminos_adicionales adi">
                            <span>Autorizacion de tratamiento de datos</span>
                            <span>Aviso de privacidad </span>
                        </div>
                    </div>
                    <div class="service-form-submit">
                        <button type="submit"><img src="../images/fotos/servicio_al_cliente/imagenes/BOTON.png"
                                alt="Boton de enviar"></button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</div>
<!-- Botones de whatsapp y dominick, lado derecho -->
<div class="foot-service">
    <img src="../images/fotos/Home/imagenes/Footer2.png" alt="">
</div>

<?php if (isset($_GET['status'])): ?>
    <div class="message-box <?php echo $_GET['status']; ?>">
        <?php if ($_GET['status'] === 'success'): ?>
            <div class="pop-up-success" id="succesModal">
                <div class="pop-up-contenido">
                    <div class="pop-up-icono">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>

                    <h3 class="pop-up-titulo">¡Envío exitoso!</h3>
                    <p class="pop-up-mensaje">¡Mensaje enviado con éxito! Pronto nos pondremos en contacto contigo.</p>

                    <a href="servicio.php" class="pop-up-btn">Entendido</a>
                </div>
            </div>

        <?php else: ?>

            <div class="pop-up-error" id="errorModal">
                <div class="pop-up-contenido">
                    <div class="pop-up-icono">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>

                    <h3 class="pop-up-titulo">¡Ocurrió un error!</h3>
                    <p class="pop-up-mensaje">Hubo un error al enviar el mensaje. Por favor, intenta nuevamente.</p>

                    <a href="servicio.php" class="pop-up-btn">Entendido</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php
// Incluye el footer
include_once '../includes/footer.php';
?>