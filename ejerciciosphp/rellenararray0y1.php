
<?php

// Enunciado: Debes generar una matriz cuadrada de 5x5 usando un array bidimensional en PHP. 
// El programa debe rellenar automáticamente la matriz siguiendo esta lógica:

// Las celdas que forman el borde 
// (primera fila, última fila, primera columna y última columna) deben valer 1.

// Las celdas del interior deben valer 0.

$matriz = [
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0]
];

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($i == 0 || $i == 4 || $j == 0 || $j == 4) {
            $matriz[$i][$j] = 1;
        } else {
            $matriz[$i][$j] = 0;
        }
        echo $matriz[$i][$j] . " ";
    }
}

?>