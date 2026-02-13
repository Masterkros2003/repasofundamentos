<?php

// 1. La Matriz de números
$matriz = [
    [15, 2, 8, 9],   // Fila 0
    [10, 5, 3, 12],  // Fila 1
    [4, 7, 20, 1]    // Fila 2
];

// Array vacío donde guardaremos los que encontremos
$numerosPares = [];

// 2. Bucle EXTERNO (Filas) - Usamos count en el bucle
for ($i = 0; $i < count($matriz); $i++) {

    // 3. Bucle INTERNO (Columnas) - Usamos count en el bucle
    for ($j = 0; $j < count($matriz[$i]); $j++) {

        $numeroActual = $matriz[$i][$j];

        // 4. La Condición MÁGICA: El Módulo (%)
        // Si el resto de dividir por 2 es 0, es PAR.
        if ($numeroActual % 2 == 0) {
            
            // Lo agregamos a nuestro array de resultados
            $numerosPares[] = $numeroActual;
            
        } 
        // (Opcional) Si quisieras los impares, usarías un else aquí
    }
}

// 5. Mostramos el resultado
echo "He encontrado estos pares: ";
// Imprimimos el array resultante separado por comas
echo implode(", ", $numerosPares);

?>