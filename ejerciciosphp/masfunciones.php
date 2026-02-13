<?php

// 21. Estadísticas de una secuencia (Centinela y acumuladores)
// Crea un programa que procese una serie de números 
// (puedes meterlos en un array o usar un bucle con valores fijos). El programa debe decir al final:

// Cuántos números se procesaron.

// Cuál fue el número más alto.

// Cuál fue el número más bajo.

// Cuál es la media aritmética de todos los números.




$numeros = [1, 2, 7, 9, 3, 8];

$procesaron = 0;

$esmayor = 0;

$numeroalto = 0;

$total = 0;


for ($i = 0; $i < count($numeros); $i++) {

    $procesaron++;


    if ($numeros[$i] > $numeros[$numeroalto]) {
        $numeroalto = $i;
    }
    //media
    $total += $numeros[$i];
    $media = $total / $procesaron;
}
echo $numeros[$numeroalto];
echo "<br>";
echo $procesaron;
echo $media;




?>
