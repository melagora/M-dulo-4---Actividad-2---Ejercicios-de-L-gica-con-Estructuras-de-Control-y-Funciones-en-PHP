<?php

// Problema de Palíndromos:
//Implementa una función llamada esPalindromo que determine si una cadena de texto dada es un palíndromo. Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas direcciones.

function esPalindromo(string $cadena): bool {
    // Convertir la cadena a minúsculas y eliminar espacios en blanco
    $cadena = strtolower(str_replace(' ', '', $cadena));

    // Invertir la cadena
    $cadenaInvertida = strrev($cadena);

    // Comparar la cadena original con la invertida
    return $cadena === $cadenaInvertida;
}

// Ejemplo:
$texto = "Anita lava la tina";
if (esPalindromo($texto)) {
    echo "$texto es un palíndromo.";
} else {
    echo "$texto no es un palíndromo.";
}

?>