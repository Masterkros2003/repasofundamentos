<?php

$inventario = [4, 2, 7, 4, 8, 2, 4, 1, 9];
$elementosduplicados = [];

for ($i = 0; $i < count($inventario); $i++) {
    $valor = $inventario[$i];
    $encontrado = false;

    // Comprobamos si ya hemos guardado este valor antes
    for ($j = 0; $j < count($elementosduplicados); $j++) {
        if ($valor == $elementosduplicados[$j]) {
            $encontrado = true;
            break; // ¡Importante! Si ya lo encontramos, no hace falta seguir mirando el resto de únicos
        }
    }

    // Si después de revisar todos los únicos no estaba, lo añadimos
    if (!$encontrado) {
        $elementosduplicados[] = $valor;
    }
}

// 2. Mostrar el resultado (Aquí es donde estaba el fallo)
// Necesitamos recorrer el array de "unicos" para verlos todos
for ($i = 0; $i < count($elementosduplicados); $i++) {
    echo $elementosduplicados[$i];
}



?>