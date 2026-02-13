<?php
$clase = [
    "Ana" => [
        "Matemáticas" => 8,
        "Historia" => 4,
        "Inglés" => 7
    ],
    "Carlos" => [
        "Matemáticas" => 3,
        "Historia" => 6,
        "Inglés" => 5
    ],
    "Luis" => [
        "Matemáticas" => 9,
        "Historia" => 9,
        "Inglés" => 10
    ]
];

foreach ($clase as $nombre => $boletin) {

$sumaNotas=0;
$asignatura=0;

foreach ($boletin as $asignatura => $nota) {
    $sumaNotas=$sumaNotas +$nota;
    $asignatura++;
}

if ($asignatura >0) {
    $media = $sumaNotas/$asignatura;
}else{
    $media = 0;
}

if ($media > 9) {
    echo("muy bien");
}elseif($media >= 5){
    echo("aprobado");

}else{
    echo("suspenso");

}

}


?>

<?php

$cine = [
    [1, 0, 0, 1, 1], 
    [1, 1, 1, 1, 1], // Fila 1 (Llena)
    [0, 0, 0, 0, 0], 
    [1, 1, 0, 1, 1], 
    [1, 0, 0, 0, 1]  
];

// 1. Bucle EXTERNO: Usamos count($cine) aquí
for ($i = 0; $i < count($cine); $i++) {

    // ESTRATEGIA DE BANDERA:
    // Asumimos que la fila está llena hasta que se demuestre lo contrario.
    $filaCompleta = true; 

    // 2. Bucle INTERNO: Usamos count($cine[$i]) aquí
    for ($j = 0; $j < count($cine[$i]); $j++) {

        // Si encontramos un 0 (libre)...
        if ($cine[$i][$j] == 0) {
            // ...entonces la suposición era falsa. La fila NO está completa.
            $filaCompleta = false;
        }
    }

    // 3. El IF FINAL:
    // Fíjate que aquí NO hay count(). Solo verificamos la bandera.
    if ($filaCompleta == true) {
        echo "⚠️ La Fila $i está COMPLETAMENTE LLENA.\n";
    }
}

?>