<?php

//Problema de números Primos:
//Crea una función llamada esPrimo que determine si un número dado es primo o no. Un número primo es aquel que solo es divisible por 1 y por sí mismo.

function esPrimo(int $numero): bool {
    // Un número primo es mayor que 1
    if ($numero <= 1) {
        return false;
    }

    // Los números primos solo son divisibles por 1 y por sí mismos
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }

    // Si el bucle termina sin encontrar divisores, el número es primo
    return true;
}

// Ejemplo:
$numero = 17;
if (esPrimo($numero)) {
    echo "El número $numero es un número primo.";
} else {
    echo "El número $numero no es un número primo.";
}

?>