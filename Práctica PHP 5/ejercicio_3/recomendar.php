<?php
$nombre      = $_POST['nombre'];
$email       = $_POST['email'];
$email_amigo = $_POST['email_amigo'];
$mensaje     = $_POST['mensaje'];

$destinatario = $email_amigo;
$asunto = "$nombre te recomienda visitar nuestro sitio";

$cuerpo = "
<html>
<body>
    <h2>Te recomendaron un sitio!</h2>
    <p><b>$nombre</b> pensó que te podría interesar visitar nuestro sitio.</p>
    <p><b>Visitalo en:</b> <a href='http://www.tusitio.com'>www.tusitio.com</a></p>
    " . (!empty($mensaje) ? "<p><b>Mensaje de $nombre:</b> $mensaje</p>" : "") . "
    <p><i>Este mensaje fue enviado por $nombre ($email)</i></p>
</body>
</html>
";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $nombre <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "La recomendación fue enviada correctamente a $email_amigo.";
} else {
    echo "Hubo un error al enviar. Por favor intentá de nuevo.";
}
?>