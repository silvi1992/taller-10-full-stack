//<?php
// Obtener los números ingresados por el usuario
echo "Ingresa el primer número: ";
$numero1 = trim(fgets(STDIN));

echo "Ingresa el segundo número: ";
$numero2 = trim(fgets(STDIN));

// Mostrar opciones de operaciones
echo "Elige una operación:\n";
echo "1. Sumar\n";
echo "2. Restar\n";
echo "3. Multiplicar\n";
echo "4. Dividir\n";

// Obtener la opción seleccionada por el usuario
echo "Ingresa el número de la operación deseada (1, 2, 3 o 4): ";
$opcion = trim(fgets(STDIN));

// Realizar la operación seleccionada
$resultado = 0;
switch ($opcion) {
    case 1:
        $resultado = $numero1 + $numero2;
        break;
    case 2:
        $resultado = $numero1 - $numero2;
        break;
    case 3:
        $resultado = $numero1 * $numero2;
        break;
    case 4:
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
        } else {
            echo "No es posible dividir entre cero.\n";
            exit;
        }
        break;
    default:
        echo "Opción no válida. Por favor, elige una opción válida (1, 2, 3 o 4).\n";
        exit;
}

// Mostrar el resultado
echo "El resultado de la operación es: " . $resultado . "\n";
?>