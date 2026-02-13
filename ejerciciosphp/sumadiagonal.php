<?php
$matriz = [
    [5, 1, 3],
    [2, 8, 4],
    [7, 6, 2]
];

$suma = 0;
for ($i = 0; $i < 3; $i++) {
    $suma += $matriz[$i][$i];
}

echo "La suma de la diagonal principal es: $suma"; // Resultado: 15
?>