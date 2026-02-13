<?php
$numeros = [10, 25, 3, 44, 7, 92];
$objetivo = 7;
$encontrado = false;

for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] == $objetivo) {
        $encontrado = true;
        break; 
    }
}

if ($encontrado) {
    echo "El número $objetivo existe en el array.";
} else {
    echo "El número $objetivo no se encuentra.";
}
?>