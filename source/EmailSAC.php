<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre      = strip_tags(trim($_POST['nombre'] ?? ''));
    $apellido    = strip_tags(trim($_POST['apellido'] ?? ''));
    $email       = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $telefono    = strip_tags(trim($_POST['telefono'] ?? ''));
    $direccion   = strip_tags(trim($_POST['ubicacion'] ?? ''));
    $comentario  = strip_tags(trim($_POST['descripcion'] ?? ''));

    if (!$email) {
        header('Location: servicio.php?status=error_email');
        exit;
    }

    $messageHtml = "
        <h2>Nuevo mensaje de Servicio al Cliente - Star Park</h2>
        <p><strong>Nombre:</strong> {$nombre} {$apellido}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Teléfono:</strong> {$telefono}</p>
        <p><strong>Centro Comercial:</strong> {$direccion}</p>
        <p><strong>Comentario:</strong><br>" . nl2br($comentario) . "</p>
    ";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sistemasjoangomez@gmail.com';
        $mail->Password   = 'pgkgjjbaxunukntv';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Destinatarios
        $mail->setFrom('sistemasjoangomez@gmail.com', 'Sistema Star Park');
        $mail->addAddress('datospersonales@starpark.com.co');
        $mail->addReplyTo($email, "{$nombre} {$apellido}");

        //Con Copia (CC)
        // $mail->addCC('desarrollo3.starpark@gmail.com');

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo mensaje de Servicio al Cliente - Star Park';
        $mail->Body    = $messageHtml;
        $mail->AltBody = strip_tags(str_replace('</p>', "\n", $messageHtml));

        $mail->send();

        header('Location: servicio.php?status=success');
        exit;
    } catch (Exception $e) {
        header('Location: servicio.php?status=error_envio');
        exit;
    }
}
