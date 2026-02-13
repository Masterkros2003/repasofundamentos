

// Objetivo: Encontrar cuál es el número más grande de toda la matriz e imprimirlo.

// Pista lógica: Crea una variable $mayor antes de los bucles y dale un valor muy bajo (o el valor de la primera celda [0][0]). 
// Dentro del bucle, si el número que estás mirando es mayor que $mayor, actualiza la variable.

$numeros = [
    [3,  8, 12],
    [45, 1, 9],
    [22, 0, 15]
];
$mayor = 0;


for ($i = 0; $i < count($notas); $i++) {
    for ($j = 0; $j < count($notas[$i]); $j++) {
        if ($notas[$i][$j] < 5) {
            $notas[$i][$j] = 0;
        }
        echo $notas[$i][$j];
    }

}
