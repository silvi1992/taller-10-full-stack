<?php
// Obtener el nombre y apellido del usuario
echo "Ingresa tu nombre: ";
$nombre = trim(fgets(STDIN));

echo "Ingresa tu apellido: ";
$apellido = trim(fgets(STDIN));

// Mostrar el nombre y apellido ingresados
echo "Nombre: " . $nombre . "\n";
echo "Apellido: " . $apellido . "\n";
?>