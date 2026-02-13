

// Ejercicio 2: El Filtro (Modificar valores)
// Objetivo: Tienes una matriz con notas de alumnos. 
// Si la nota es menor que 5, debes cambiarla por un 0 (suspenso). 
// Si es 5 o más, déjala como está. Al final, imprime la matriz modificada. -->

$notas = [
    [4, 8, 3],
    [9, 5, 2],
    [6, 7, 10]
];

for ($i = 0; $i < count($notas); $i++) {
    for ($j = 0; $j < count($notas); $j++) {

        if ($notas[$i][$j] < 5) {

            $notas[$i][$j] = 0;
        }
    }
}
echo $notas[$i][$j] ."";

 ?>