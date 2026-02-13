
<?php

// 22. Inversor de Strings (Sin funciones de PHP)
// Dada una variable $palabra = "Esternocleidomastoideo";, 
// utiliza un bucle para darle la vuelta y mostrarla al revés. 

$palabra = "Esternocleidomastoideo";
$palabravuelta = "";
$longitud = 0;


// sacar caracteres de una palabra 

for ($i = 0; $i < $palabra; $i++) {

    if ($palabra[$i] == "") {
        break;
    }
    $longitud++;
}

for ($i = $longitud - 1; $i >= 0; $i--) {

    $palabravuelta .= $palabra[$i];
}


echo $longitud;
echo $palabra;
echo $palabravuelta;



?>