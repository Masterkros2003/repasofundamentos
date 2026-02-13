<?php

// 8. Detector de años bisiestos
// Dada una variable $year, determina si es un año bisiesto. 
// (Un año es bisiesto si es divisible por 4, pero no por 100, a menos que también sea divisible por 400).

$year = 2024;

$esbisiesto = false;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "Es bisiesto";
} else {
    echo "No es bisiesto";
}




?>