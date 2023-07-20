<?php
// Obtener el nombre y la edad del usuario
echo "Ingresa tu nombre: ";
$nombre = trim(fgets(STDIN));

echo "Ingresa tu edad: ";
$edad = intval(trim(fgets(STDIN)));

// Verificar si es mayor o menor de edad
$mensaje = "";
if ($edad >= 18) {
    $mensaje = "Eres mayor de edad.";
} else {
    $mensaje = "Eres menor de edad.";
}

// Mostrar el mensaje
echo "Hola, $nombre. $mensaje\n";
?>