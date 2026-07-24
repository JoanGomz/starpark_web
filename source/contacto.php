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

/* --- Elementos Internos Compartidos --- */
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

/* --- Comportamiento y color del botón en ÉXITO --- */
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
<div class="contact-space-background">
    <!-- barra navegacion -->
    <?php
    include_once '../includes/navbar.php';
    ?>
    <main class="contact-panel">
        <section class="informacion-contacto">
            <!-- Panel de información con el personaje espacial -->
            <div class="info-container">
                <!-- Estructura con imagen de monitor y texto superpuesto -->
                <div class="monitor-container">
                    <img src="../images/fotos/contactos/imagenes/dominic.png" alt="Personaje representate del parque">
                    <div class="escribenos">
                        <h3>ESCRIBENOS AL SIGUIENTE NUMERO</h3>
                        <img src="../images/fotos/contactos/imagenes/numero.png" alt="numero al que se puede escribir">
                        <div class="redes-sociales-contacto">
                            <h3>O A NUESTRAS REDES</h3>
                            <img src="../images/fotos/contactos/imagenes/redes.png" alt="redes sociales">
                            <div class="media-contacto">
                                <a href="https://www.facebook.com/starparkco" target="_blank"><img
                                        src="<?php echo SITE_URL; ?>images/fotos/Home/Botones/facebook.png"
                                        alt="Facebook"></a>
                                <a href="https://www.instagram.com/starparkco/?hl=es-la" target="_blank"><img
                                        src="<?php echo SITE_URL; ?>images/fotos/Home/Botones/instagram.png"
                                        alt="Instagram"></a>
                                <a href="http://tiktok.com/@starparkco?lang=es" target="_blank"><img
                                        src="<?php echo SITE_URL; ?>images/fotos/Home/Botones/tiktok.png"
                                        alt="TikTok"></a>
                            </div>
                        </div>
                    </div>



        </section>

        <section class="trabaja-con-nosotros">
            <img class="contact-trabaja-banner" src="../images/fotos/contactos/imagenes/trabaja_con_nosotros.png"
                alt="Trabaja con nosotros">
        </section>

        <section class="formulario-contacto">
            <!-- Contenedor con imagen de fondo del formulario -->
            <div class="main-contact-form">
                <div class="contact-form-container">
                    <!-- Campos del formulario -->
                    <form class="contact-form" action="https://formsubmit.co/sistemasjoangomez@gmail.com" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_next"
                            value="https://starpark.spoondecolombia.com/contacto.php?status=success">
                        <input type="hidden" name="_cc"
                            value="desarrollo1.starpark@gmail.com,desarrollo3.starpark@gmail.com">
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_subject" value="Nueva Postulación desde Star Park Web">
                        <input type="hidden" name="_template" value="box">
                        <div class="equipo-star-park">
                            <h3>¿QUIERES PERTENECER AL EQUIPO STAR PARK?</h3>
                        </div>
                        <div class="nombres">
                            <div class="contact-form-input">
                                <div class="contact-input-icon">
                                    <i class="fa-solid fa-circle-user"></i>
                                    <input type="text" name="nombre" required>
                                    <label>Nombres...</label>
                                </div>
                            </div>
                            <div class="contact-form-input">
                                <div class="contact-input-icon">
                                    <i class="fa-regular fa-circle-user"></i>
                                    <input type="text" name="apellido" required>
                                    <label>Apellidos...</label>
                                </div>
                            </div>
                        </div>

                        <div class="email">
                            <div class="contact-form-input">
                                <div class="contact-input-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="email" name="email" required>
                                    <label>Email...</label>
                                </div>
                            </div>
                        </div>

                        <div class="info-complementaria">
                            <div class="contact-form-input">
                                <div class="contact-input-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <input type="text" name="direccion" required>
                                    <label>Barrio...</label>
                                </div>
                            </div>

                            <div class="contact-form-input">
                                <div class="contact-input-icon">
                                    <i class="fa-solid fa-phone-flip"></i>
                                    <input class="number" type="tel" name="telefono" required>
                                    <label>Telefono...</label>
                                </div>
                            </div>
                        </div>

                        <div class="email">
                            <div class="contact-form-input">
                                <div class="contact-input-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <select id="ubicacion" name="ubicacion" required>
                                        <option value="" disabled selected></option>
                                        <option value="altavista">Altavista</option>
                                        <option value="bulevar_niza">Bulevar Niza</option>
                                        <option value="hayuelos">Hayuelos</option>
                                        <option value="paseo_villa_del_rio">Paseo Villa del Río</option>
                                        <option value="bello">Bello</option>
                                        <option value="cali">Cali</option>
                                        <option value="mayorca">Mayorca</option>
                                        <option value="mosquera">Mosquera</option>
                                        <option value="neiva">Neiva</option>
                                        <option value="cucuta">Cucuta</option>
                                        <option value="villavicencio">Villavicencio</option>
                                    </select>
                                    <label>Selecciona Sede...</label>
                                </div>
                            </div>
                        </div>
                        <div class="comments">
                            <div class="contact-form-input-file">
                                <input type="file" name="archivo" id="archivo" class="comentarios" required>

                                <label for="archivo" class="custom-file-upload">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <span id="file-name">Subir Hoja de Vida / Archivo...</span>
                                </label>
                            </div>
                        </div>

                        <div class="contact-form-terms">
                            <input type="checkbox" id="terminos" name="terminos" required>
                            <label for="terminos">Aplican Términos Y Condiciones.<br>
                                <a href="politica.php">https://www.starpark.com.co/politica</a>
                            </label>
                        </div>

                        <button class="contact-register-btn" type="submit">
                            <img src="images/fotos/contactos/imagenes/REGISTRAR.png" alt="Boton para registrarse">
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Mensaje de éxito o error -->
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

                    <a href="contacto.php" class="pop-up-btn">Entendido</a>
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

                    <a href="contacto.php" class="pop-up-btn">Entendido</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </main>
    <img class="footer-contact" src="../images/fotos/Home/imagenes/Footer2.png" alt="footer superior">
</div>
<script>
document.getElementById('archivo').addEventListener('change', function() {
    const fileNameSpan = document.getElementById('file-name');
    if (this.files && this.files.length > 0) {
        fileNameSpan.textContent = this.files[0].name;
        this.nextElementSibling.style.borderColor = '#4caf50';
    } else {
        fileNameSpan.textContent = "Subir Hoja de Vida / Archivo...";
    }
});
</script>
<?php
// Incluye el footer
include_once '../includes/footer.php';
?>