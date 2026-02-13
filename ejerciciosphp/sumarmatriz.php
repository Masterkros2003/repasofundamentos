// Ejercicio 1: El Contador (Acumulador)
// Objetivo: Recorrer una matriz de precios y calcular la suma total de todo el dinero.

$precios = [
    [10, 20, 30],
    [5,  5,  5],
    [50, 10, 10]
];
$sumaTotal = 0;

for ($i = 0; $i < count($precios); $i++) {
    for ($j = 0; $j < count($precios[$i]); $j++) {
        $sumaTotal = $precios[$i][$j];
    }
}
