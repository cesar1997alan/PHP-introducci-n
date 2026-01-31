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

foreach ($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['Nombre']; ?> </p>
        <p>Precio: <?php echo "$ " . $producto['Precio']; ?> </p>
        <p><?php echo ($producto['Disponible']) ? 'Disponible' : 'No Disponible'; ?> </p>
    </li>
<?php


};


include 'includes/footer.php';
