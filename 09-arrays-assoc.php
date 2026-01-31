<?php include 'includes/header.php';
// Arreglos asociativos o Associative arrays 
$cliente = [
    'Nombre' => 'Cesar',
    'Saldo' => 200,
    'Información' => [
        'Suscripción' => 'Premium'
    ]
];
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// echo $cliente ['Nombre']
//echo $cliente['Información']['Suscripción'];
$cliente['Código'] = 1245;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
