<?php

$frase="hola Javi hola Paco portatil de PACO";

$array = [];

$palabra = " ";

$encontrada = false;

//recorremos letra a letra 

for ($i=0; $i < count($frase); $i++) { 

if ($frase[$i] != "") {
    $palabra .= $palabra[$i];

}

//array asociativo
foreach ($array as $key => $value) {

if ($palabra == $key) {
$encontrado = true;
$value ++;
  
}

}if (!$encontrada ) {

$array[$palabra] = 1;

}

}

// $usuarios = [["nombre" => "Ana", "pais"=>"España"],
//             ["nombre" => "Luis", "pais"=>"Mexico"],
//             ["nombre" => "Juan", "pais"=>"España"],];

// $salida = [];





// for ($i=0; $i < count($usuarios); $i++) { 
//     foreach ($usuarios[$i] as $key => $value) {
//        if ($key == "pais") {
//     $pais = $value;
//        }
//     }

// }

$carrito= [["id" =>1, "nombre" => "Laptop", "precio" =>1200, "cantidad" =>1, "categoria" => "tech"],
["id" =>2, "nombre" => "Laptop", "precio" =>1200, "cantidad" =>1, "categoria" => "tech"],
["id" =>3, "nombre" => "Laptop", "precio" =>1200, "cantidad" =>1, "categoria" => "tech"],];

$total = 0;

for ($i=0; $i < count($carrito); $i++) { 

if ($carrito[$i]["categoria"] == $categoria) {
    $total = $carrito[$i]["precio"];
   
}return $total * 0.20;
    
}











?>