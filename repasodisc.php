<?php

// 8. Detector de años bisiestos
// Dada una variable $year, determina si es un año bisiesto. 
// (Un año es bisiesto si es divisible por 4, pero no por 100, a menos que también sea divisible por 400).

$year = 2024;

$esbisiesto = false;

if ($year % 4 == 0 && $year % 100 != 0) {

    if ($year % 400 == 0) {
        $esbisiesto = true;
        echo ("Es bisiesto");
    } else {

        $esbisiesto = false;
        echo (" No Es bisiesto");
    }
}




?>

<?php

// 11. Comparador de tres números
// Dadas tres variables $a, $b y $c, 
// muestra cuál de las tres es la mayor de todas sin usar funciones integradas de PHP (como max()).


$a = 5;
$b = 3;
$c = 4;


if ($a > $b && $a > $c) {
    echo ("No Se cumple");
} elseif ($b > $c) {
    echo "Se cumple";
} else {
    echo "No se cumple";
}

?>




<?php

// 21. Estadísticas de una secuencia (Centinela y acumuladores)
// Crea un programa que procese una serie de números 
// (puedes meterlos en un array o usar un bucle con valores fijos). El programa debe decir al final:

// Cuántos números se procesaron.

// Cuál fue el número más alto.

// Cuál fue el número más bajo.

// Cuál es la media aritmética de todos los números.




$numeros = [1, 2, 7, 9, 3, 8];

$procesaron = 0;

$esmayor = 0;

$numeroalto = 0;

$total = 0;


for ($i = 0; $i < count($numeros); $i++) {

    $procesaron++;


    if ($numeros[$i] > $numeros[$numeroalto]) {
        $numeroalto = $i;
    }
    //media
    $total += $numeros[$i];
    $media = $total / $procesaron;
}
echo $numeros[$numeroalto];
echo "<br>";
echo $procesaron;
echo $media;




?>


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


<?php

// Enunciado: Debes generar una matriz cuadrada de 5x5 usando un array bidimensional en PHP. 
// El programa debe rellenar automáticamente la matriz siguiendo esta lógica:

// Las celdas que forman el borde 
// (primera fila, última fila, primera columna y última columna) deben valer 1.

// Las celdas del interior deben valer 0.

// Requisitos técnicos:

// Usa dos bucles for anidados (uno para filas $i y otro para columnas $j).

// Usa una única estructura if con operadores lógicos (||) 
// para detectar si estás en un borde.

// Imprime la matriz en la terminal usando echo 
// y saltos de línea \n para que se vea cuadrada.


// Nota: No hace falta escribir todos los ceros manualmente aquí,
// pero dejarlo así no es un error, es solo más trabajo para ti.
$matriz = [
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0]
];

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($i == 0 || $i == 4 || $j == 0 || $j == 4) {
            $matriz[$i][$j] = 1;
        } else {
            $matriz[$i][$j] = 0;
        }
        echo $matriz[$i][$j] . " ";
    }
}



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
        $sumaTotal = $precios[$i] + $precios[$j];
    }
}



// Objetivo: Encontrar cuál es el número más grande de toda la matriz e imprimirlo.

// Pista lógica: Crea una variable $mayor antes de los bucles y dale un valor muy bajo (o el valor de la primera celda [0][0]). 
// Dentro del bucle, si el número que estás mirando es mayor que $mayor, actualiza la variable.

$numeros = [
    [3,  8, 12],
    [45, 1, 9],
    [22, 0, 15]
];
$mayor = 0;


for ($i = 0; $i < count($numeros); $i++) {
    for ($j = 0; $j < count($numeros); $j++) {
        if ($numeros[$i][$j] > $mayor) {
            $mayor = $numeros[$i][$j];
        }
    }
}



// 22. Inversor de Strings (Sin funciones de PHP)
// Dada una variable $palabra = "Esternocleidomastoideo";, 
// utiliza un bucle para darle la vuelta y mostrarla al revés. 

$palabra = "Esternocleidomastoideo";
$palabravuelta = "";
$longitud = 0;

for ($i = 0; $i < $palabra; $i++) {
    if ($palabra[$i] == "") {
        break;
    }
    $longitud++;
}
for ($i = $longitud - 1; $i >= 0; $i--) {
    $palabravuelta .= $palabra[$i];
}


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

// Ejercicio 2: El Filtro (Modificar valores)
// Objetivo: Tienes una matriz con notas de alumnos. 
// Si la nota es menor que 5, debes cambiarla por un 0 (suspenso). Si es 5 o más, déjala como está. Al final, imprime la matriz modificada.

$notas = [
    [4, 8, 3],
    [9, 5, 2],
    [6, 7, 10]
];

for ($i = 0; $i < count($notas); $i++) {
    for ($j = 0; $j < count($notas); $j++) {

        if ($notas[$i][$j] < 5) {

            $notas[$i][$j] = 0;
        }
    }
}
echo $notas[$i][$j] ."";



// Ejercicio 1: El Perfil de Usuario (Acceso Directo)
// Objetivo: Aprender a leer y modificar datos específicos sin bucles. Tienes un array con los datos de una persona.

// Imprime una frase que diga: "Hola, soy [Nombre] y tengo [Edad] años".

// Modifica la ciudad: La persona se ha mudado a "Madrid".

// Imprime la nueva ciudad.

$usuario = [
    'nombre' => 'Carlos',
    'edad'   => 30,
    'ciudad' => 'Valencia',
    'email'  => 'carlos@test.com'
];

$usuario["ciudad"] = "Madrid";


echo$usuario["ciudad"];

echo "Hola, soy" .$usuario["nombre"]. "y tengo años" .$usuario["edad"];



// Ejercicio 3: El Filtro de Edad (Condicionales con Claves)
// Objetivo: Tienes una lista de amigos y sus edades. 
// Solo quieres invitar a tu fiesta a los que sean mayores de 18 años.

$amigos = [
    'Ana'   => 17,
    'Luis'  => 22,
    'Sara'  => 19,
    'Pedro' => 15
];

$fiesta =[];


foreach($amigos as $key => $valor){

if($valor > 18){

$mas18 = $fiesta[$key];

}

}echo$mas18;




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


?>

