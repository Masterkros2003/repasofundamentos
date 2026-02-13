$alumnos = [
    "Ana" => 8.5,
    "Pedro" => 9.2,
    "Lucía" => 7.0,
    "Marcos" => 9.8,
    "Sofía" => 10
];

echo "Alumnos sobresalientes:\n";
foreach ($alumnos as $nombre => $nota) {
    if ($nota >= 9) {
        echo "- $nombre ($nota)\n";
    }
}