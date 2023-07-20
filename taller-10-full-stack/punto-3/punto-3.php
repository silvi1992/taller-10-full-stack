<?php
// DECLARACION DE VARIABLES
$Number1 = 0;
$Number2 = 0;

// PROCESO
echo "Ingresa el primer número a sumar: ";
fscanf(STDIN, "%d", $Number1);
echo "Ingresa el segundo número a sumar: ";
fscanf(STDIN, "%d", $Number2);

$add = $Number1 + $Number2;

// SALIDA
echo "La suma es: " . $add;