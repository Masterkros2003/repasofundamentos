<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumaPares = 0;
$sumaImpares = 0;

for ($i = 0; $i < count($numeros); $i++) {
    //  % para saber el resto de la división
    if ($numeros[$i] % 2 == 0) {
        $sumaPares += $numeros[$i];
    } else {
        $sumaImpares += $numeros[$i];
    }
}

echo "Suma de pares: $sumaPares <br>";
echo "Suma de impares: $sumaImpares";
?>