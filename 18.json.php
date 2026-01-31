<?php include 'includes/header.php';
$productos = [
    [
        'Nombre' => 'Tablet',
        'Precio' => 7500,
        'Disponible' => true
    ],
    [
        'Nombre' => 'Laptop',
        'Precio' => 27800,
        'Disponible' => true
    ],
    [
        'Nombre' => 'Monitor Curvo Oled',
        'Precio' => 9500,
        'Disponible' => false
    ]
];
echo "<pre>";
var_dump($productos);
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
$json_array = json_decode($json);
var_dump($json);
var_dump($json_array);
echo "</pre>";






include 'includes/footer.php';
