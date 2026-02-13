
<?php 
$usuarios = [
    ["nombre" => "Ana", "pais" => "España"],
    ["nombre" => "Luis", "pais" => "Mexico"],
    ["nombre" => "Juan", "pais" => "España"],
];

$salida = [];

for ($i = 0; $i < count($usuarios); $i++) {
    // Accedemos directamente, sin el foreach interno
    if ($usuarios[$i]["pais"] == "España") {
        // Guardamos el usuario completo en el array de salida
        $salida[] = $usuarios[$i]; 
    }
}

//persona recorre 0,1,2 que son los nombres
// usuario seria el array 
foreach ($salida as $persona => $usuarios) {
   echo $usuarios["nombre"];
}

 ?>