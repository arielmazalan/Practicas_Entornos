<?php
$destinatario = "correo@destino.com";
$asunto = "Prueba de mail HTML";
$cuerpo = '
<html>
<head>
    <title>Mail de prueba</title>
</head>
<body>
    <h1>Hola!</h1>
    <p>Este es un correo enviado con <b>formato HTML</b> desde PHP.</p>
    <p style="color: red;">Esto está en rojo.</p>
</body>
</html>
';

$headers  = "MIME-Version: 1.0\r\n";                              
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
$headers .= "From: Tu Nombre <tunombre@tudominio.com>\r\n";      
$headers .= "Reply-To: tunombre@tudominio.com\r\n";

if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "El correo fue enviado correctamente.";
} else {
    echo "Hubo un error al enviar el correo.";
}
?>