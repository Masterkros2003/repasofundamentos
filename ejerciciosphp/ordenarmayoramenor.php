<?php

$numeros = [1, 2, 3, 6, 4, 5, 9, 8];

do {

    $ordenado = true;

    for ($i = 0; $i < count($numeros); $i++) {

        if ($i != count($numeros) - 1) {
            $valoractual = $numeros[$i];
            $valorsiguiente = $numeros[$i + 1];

            if ($valoractual > $valorsiguiente) {

                $ordenado = false;
                $numeros[$i] = $valorsiguiente;
                $numeros[$i + 1] = $valoractual;
            }
        }
    }
} while (!$ordenado)

?>