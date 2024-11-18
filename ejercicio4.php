<?php

// Problema de Frecuencia de Caracteres:
//Implementa una función que tome una cadena de texto y devuelva un array asociativo que muestre la frecuencia de cada carácter en la cadena.

function contarCaracteres(string $cadena): array {
    // Convertir la cadena a minúsculas para una comparación más precisa
    $cadena = strtolower($cadena);

    // Inicializar un array asociativo para almacenar la frecuencia de cada caracter
    $frecuencia = [];

    // Recorrer cada caracter de la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];

        // Si el caracter ya existe en el array, incrementar su frecuencia
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            // Si es la primera vez que se encuentra el caracter, inicializar su frecuencia en 1
            $frecuencia[$caracter] = 1;
        }
    }

    return $frecuencia;
}

// Ejemplo:
$texto = "Estoy desde php.";
$resultado = contarCaracteres($texto);
print_r($resultado);

?>