$stock = [
    "Teclado" => 15,
    "Ratón" => 4,
    "Monitor" => 8,
    "Cámara" => 2
];

foreach ($stock as $producto => $cantidad) {
    echo $producto . ": ";
    if ($cantidad < 5) {
        echo "Reponer Stock (" . $cantidad . ")\n";
    } else {
        echo "Stock OK (" . $cantidad . ")\n";
    }
}