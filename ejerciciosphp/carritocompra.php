<?php
// Carrito de la compra estructurado
$carrito = [
    ["producto" => "Pan Artisan", "precio" => 1.20, "cantidad" => 2],
    ["producto" => "Leche Entera", "precio" => 0.80, "cantidad" => 6],
    ["producto" => "Agua Mineral", "precio" => 0.50, "cantidad" => 12],
    ["producto" => "Queso Manchego", "precio" => 12.50, "cantidad" => 1],
];

$descuentoGlobal = 0.10; 
$iva = 0.21;            
$subtotalTotal = 0;

echo "--- RESUMEN DE TU COMPRA ---\n";

foreach ($carrito as $item) {
    $nombre = $item['producto'];
    $precioUnitario = $item['precio'];
    $cantidad = $item['cantidad'];
    
    // Cálculo por línea de producto
    $subtotalProducto = $precioUnitario * $cantidad;
    $subtotalTotal += $subtotalProducto;

    // Mostramos la línea detallada
    echo str_pad($nombre, 15) . " x$cantidad | " . number_format($subtotalProducto, 2) . "€\n";
}

// Cálculos finales
$ahorro = $subtotalTotal * $descuentoGlobal;
$baseImponible = $subtotalTotal - $ahorro;
$cuotaIva = $baseImponible * $iva;
$totalFinal = $baseImponible + $cuotaIva;

echo "----------------------------\n";
echo "Subtotal Bruto:    " . number_format($subtotalTotal, 2) . "€\n";
echo "Descuento (10%):  -" . number_format($ahorro, 2) . "€\n";
echo "IVA (21%):         " . number_format($cuotaIva, 2) . "€\n";
echo "============================\n";
echo "TOTAL A PAGAR:     " . number_format($totalFinal, 2) . "€\n";
?>