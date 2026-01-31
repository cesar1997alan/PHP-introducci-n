<?php include 'includes/header.php';
// While 

$i = 0; // Inicializador 
while ($i < 10) {
    echo $i . '</br>';
    $i++; // Incremento 
};
echo '</br>';
// Do while 

$i = 0;
do {
    echo $i . '</br>';
    $i++; // Incremento 
} while ($i < 11);
echo '</br>';

// For loop
for ($i = 0; $i < 12; $i++) {
    echo $i . '</br>';
};
echo '</br>';
/**
 * 3 Imprime FIZZ
 * 5 Imrpime BUZZ
 * 3 y 5 Imrprime FIZZ BUZZ 
 */
for ($i = 0; $i < 51; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . 'Fizz Buzz </br>';
    } else if ($i % 3 === 0) {
        echo $i . 'Fizz </br>';
    } else if ($i % 5 === 0) {
        echo $i . 'Buzz </br>';
    } else {
        echo $i . '</br>';
    };
};
echo '</br>';

// Foor each
$clientes = ['Ana', 'Edgar', 'Karen'];
foreach ($clientes as $cliente) {
    echo $cliente . '</br>';
}
$cliente = [
    'Nombre' => 'Cesar',
    'Saldo' => 450,
    'Tipo' => 'Premium'
];

foreach ($cliente as $key => $valor) {
    echo $key . "-" . $valor . '<br>';
};
include 'includes/footer.php';
