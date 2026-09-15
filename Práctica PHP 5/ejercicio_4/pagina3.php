<?php
session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {
    $_SESSION['contador']++;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="ISO-8859-1">
    <title>Página 3</title>
</head>
<body>

    <h1>Página 3</h1>
    <p>Llevás <b><?php echo $_SESSION['contador']; ?></b> páginas visitadas en esta sesión.</p>

    <p><a href="cuenta.php">Ir a página principal</a></p>
    <p><a href="pagina2.php">Ir a página 2</a></p>
    <p><a href="cerrar_sesion.php">Cerrar sesión</a></p>

</body>
</html>