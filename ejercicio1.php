<?php

$inventario = [4,2,7,4,8,2,4,1,9];

$elementosduplicados = [];


for($i = 0; $i < count($inventario); $i++){

$valor = $inventario[$i];
$encontrado = false;

    for($j = 0; $j < count($elementosduplicados); $j++){
    
        if($valor == $elementosduplicados[$j]){
            $encontrado = true;
        }

    }if(!$encontrado){
        $elementosduplicados[] = $valor;

    }
 
}


?>