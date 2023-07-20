<?php
// Constante del valor por persona
const TICKET_PRICE = 25000;

// Obtener el tipo de afiliación y el número de personas ingresados por el usuario
echo "Ingrese el tipo de afiliación (A, B, C o D): ";
$afiliacion = trim(fgets(STDIN));

echo "Ingrese el número de personas: ";
$numeroPersonas = intval(trim(fgets(STDIN)));

// Calcular el total sin descuento
$totalSinDescuento = $numeroPersonas * TICKET_PRICE;

// Calcular el descuento según el tipo de afiliación
$descuento = 0;
switch (strtoupper($afiliacion)) {
    case 'A':
        $descuento = 0.3;
        break;
    case 'B':
        $descuento = 0.23;
        break;
    case 'C':
        $descuento = 0.1;
        break;
    case 'D':
        $descuento = 0.05;
        break;
    default:
        echo "Tipo de afiliación no válido. Por favor, ingrese un tipo válido (A, B, C o D).\n";
        exit;
}

// Calcular el total con descuento
$totalConDescuento = $totalSinDescuento - ($totalSinDescuento * $descuento);

// Mostrar el resultado
echo "El valor total de las entradas a la bolera es: $" . $totalConDescuento . "\n";
?>