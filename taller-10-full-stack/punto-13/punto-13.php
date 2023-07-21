<?php
// Definimos el arreglo numérico de 5 posiciones
$numeros = array(10, 20, 30, 40, 50);

// Inicializamos una variable para almacenar la suma
$suma = 0;

// Iteramos sobre el arreglo utilizando un bucle for
for ($i = 0; $i < count($numeros); $i++) {
    // Sumamos cada número al valor de la variable $suma
    $suma += $numeros[$i];
}

// Mostramos el resultado de la suma
echo "La suma de los números del arreglo es: $suma";
?>