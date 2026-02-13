// Dada una matriz de 3x3 con números enteros arbitrarios, recorre la matriz y cuenta cuántos de esos números son pares. 
// Al final, imprime la cantidad total (ej: "Hay 4 números pares").

$datos = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
$contadorPares = 0;

for ($i = 0; $i < count($datos); $i++) {
    for ($j = 0; $j < count($datos); $j++) {



        if ($datos[$i][$j] % 2 == 0) {
            $contadorPares++;
        }
    }
}
echo $contadorPares;