
// Ejercicio: El Inventario de "Frutas Loli"
// La Estructura: El array principal tiene los nombres de las frutas como clave. El valor es otro array con los datos (precio y stock).

// Objetivo: Tienes que recorrer la frutería y calcular cuánto dinero vale todo tu inventario 
// (multiplicando precio x stock de cada fruta y sumándolo al total).

$fruteria = [
    'Manzana' => ['precio' => 2.50, 'stock' => 10],
    'Pera'    => ['precio' => 1.80, 'stock' => 20],
    'Plátano' => ['precio' => 1.20, 'stock' => 50],
    'Melón'   => ['precio' => 3.00, 'stock' => 0]  
];

$preciototal = 0;


foreach ($fruteria as $fruta => $value) {

    $precio= $value["precio"];
    $stock = $value["stock"];

    $subtotal = $precio * $stock;

    $preciototal += $subtotal;



    
}echo$preciototal;

