$matriz_numeros = [
    [15, 22, 8, 100],
    [45, 5, 12, 1],
    [3, 19, 31, 77],
    [0, 66, 14, 25]
];

// Inicializamos con el primer elemento
$valor_maximo = $matriz_numeros[0][0];
$valor_minimo = $matriz_numeros[0][0];

// Usamos count() directamente en los for para que sea dinámico
for ($i = 0; $i < count($matriz_numeros); $i++) {
    // Aquí contamos los elementos de la fila actual ($i)
    for ($j = 0; $j < count($matriz_numeros[$i]); $j++) {
        
        $numero_actual = $matriz_numeros[$i][$j];

        if ($numero_actual > $valor_maximo) {
            $valor_maximo = $numero_actual;
        }

        if ($numero_actual < $valor_minimo) {
            $valor_minimo = $numero_actual;
        }
    }
}

echo "El número más alto es: " . $valor_maximo . "\n";
echo "El número más bajo es: " . $valor_minimo;