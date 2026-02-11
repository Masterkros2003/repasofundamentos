<?php

$numeros = [8,1,3,5];
$ordenado = true;




for ($i=0; $i < count($numeros); $i++) { 
    $valoractual = $numeros[$i];
    $valorsiguiente = $numeros[$i + 1];


    if($valoractual > $valorsiguiente);
    $ordenado = false;
    $numeros[$i + 1] =  $valoractual;
    $numeros[$i] = $valorsiguiente;

}

?>



