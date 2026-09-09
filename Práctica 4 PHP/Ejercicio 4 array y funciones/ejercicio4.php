<?php
function comprobar_nombre_usuario($nombre_usuario){ 
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){ 
        echo $nombre_usuario . " no es válido<br>"; 
        return false; 
    }
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_"; 
    for ($i=0; $i<strlen($nombre_usuario); $i++){ 
        if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){ 
            echo $nombre_usuario . " no es válido<br>"; 
            return false; 
        } 
    } 
    echo $nombre_usuario . " es válido<br>"; 
    return true; 
}

// Casos de prueba
echo "<h3>Pruebas de validación:</h3>";

// Caso 1: nombre válido normal
comprobar_nombre_usuario("juan23");

// Caso 2: nombre válido con guiones
comprobar_nombre_usuario("juan_perez-23");

// Caso 3: muy corto (menos de 3 caracteres)
comprobar_nombre_usuario("ab");

// Caso 4: muy largo (más de 20 caracteres)
comprobar_nombre_usuario("esteNombreEsDemasiadoLargo123");

// Caso 5: caracteres inválidos
comprobar_nombre_usuario("juan@#!");

// Caso 6: con espacio
comprobar_nombre_usuario("juan perez");
?>