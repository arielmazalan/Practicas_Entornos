<?php
$nombre  = $_POST['nombre'];
$email   = $_POST['email'];
$consulta = $_POST['consulta'];
$fecha   = date("d-m-Y");
$hora    = date("H:i:s");

$destinatario = "webmaster@tudominio.com";
$asunto = "Consulta de $nombre";

$cuerpo = "
<html>
<body>
    <h2>Nueva consulta desde el sitio</h2>
    <p><b>Nombre:</b> $nombre</p>
    <p><b>Email:</b> $email</p>
    <p><b>Consulta:</b> $consulta</p>
    <p><b>Fecha:</b> $fecha a las $hora</p>
</body>
</html>
";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $nombre <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "Tu consulta fue enviada correctamente. Te responderemos a la brevedad.";
} else {
    echo "Hubo un error al enviar. Por favor intentá de nuevo.";
}
?>