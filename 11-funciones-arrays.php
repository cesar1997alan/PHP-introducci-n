<?php include 'includes/header.php';
// In-array busca si hay elementos en un arreglo
$carrito = ['sudadera', 'palyera', 'zapatos'];

var_dump(in_array('zapatos', $carrito));
var_dump(in_array('pulsera', $carrito));

// Ordenar los elementos de un arreglo indexado
$numeros = array(1, 5, 7, 8, 2, 3, 9);
sort($numeros); // de menor a mayor
rsort($numeros); // de mayor a menor 
echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar los elementos de un arreglo asociativo 
$cliente = array(
    'Saldo' => 350,
    'Suscripción' => 'Premium',
    'Usuario' => 'Cesar'
);
asort($cliente); // Ordena por valores (orden alfabetico)
ksort($cliente); // Ordena por llaves (orden alfabetico)
krsort($cliente); // Ordena por llaves (orden alfabetico, de la Z a la A) 
echo "<pre>";
var_dump($cliente);
echo "</pre>";




include 'includes/footer.php';
