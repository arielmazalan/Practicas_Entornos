<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="ISO-8859-1">
    <title>Sesión cerrada</title>
</head>
<body>

    <h1>Sesión cerrada</h1>
    <p>Tu sesión fue cerrada. El contador se reinició.</p>
    <p><a href="cuenta.php">Volver al inicio</a></p>

</body>
</html>