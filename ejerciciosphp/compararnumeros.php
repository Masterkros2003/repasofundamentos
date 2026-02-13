<?php

// 11. Comparador de tres números
// Dadas tres variables $a, $b y $c, 
// muestra cuál de las tres es la mayor de todas sin usar funciones integradas de PHP (como max()).


$a = 5;
$b = 3;
$c = 4;


if ($a >= $b && $a >= $c) {
    echo "El mayor es $a";
} elseif ($b >= $c) {
    echo "El mayor es $b";
} else {
    echo "El mayor es $c";
}

?>