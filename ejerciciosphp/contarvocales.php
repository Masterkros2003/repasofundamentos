<?php
$palabra = "Esternocleidomastoideo";
$vocales = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];

$contadorVocales = 0;
$longitud = 0;

// 1. MEDIR LA PALABRA (Tu sintaxis manual)
// Caminamos por la palabra hasta que no haya nada ("")


for ($i = 0;$i < $palabra; $i++) {
    if ($palabra[$i] == "") {
        break; 
    }
    $longitud++;
}

// 2. RECORRER LA PALABRA
for ($i = 0; $i < $longitud; $i++) {
    
    $letraActual = $palabra[$i];

    // 3. RECORRER LAS VOCALES 
    for ($j = 0; $j < count($vocales); $j++) {
        
        if ($letraActual == $vocales[$j]) {
            $contadorVocales++;
            break; 
        }
    }
}

echo "Palabra: " . $palabra . "<br>";
echo "Total de vocales: " . $contadorVocales;
?>