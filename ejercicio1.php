<?php

//Problema de la serie Fibonacci:
// Escribe una función llamada generar Fibonacci que reciba un número n como parámetro y genere los primeros n términos de la serie Fibonacci. La serie comienza con 0 y 1, y cada término subsiguiente es la suma de los dos anteriores.

function generarFibonacci(int $n): array {
    // Inicializamos un arreglo para almacenar la serie
    $fibonacci = [0, 1];

    // Verificamos si n es menor o igual a 2, ya que los primeros dos términos ya están en el arreglo
    if ($n <= 2) {
        return array_slice($fibonacci, 0, $n);
    }

    // Generamos los términos restantes utilizando un bucle
    for ($i = 2; $i < $n; $i++) {
        // Calculamos el siguiente término sumando los dos anteriores
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    // Retornamos el arreglo completo con los n términos de la serie
    return $fibonacci;
}

// Ejemplo:
$n = 10;
$resultado = generarFibonacci($n);
print_r($resultado);

?>