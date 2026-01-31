<?php include 'includes/header.php';

$cliente = [];
$cliente2 = array();
$cliente3 = array('cesar', 'alan', 'karen', 'laura');
$cliente5 = [
    'Nombre' => 'Edgar',
    'Saldo' => 150
];

// Empy para revizar si un arreglo esta vacío o no esta vacío
var_dump(empty($cliente));
var_dump(empty($cliente3));

// Isset va a revisar si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump(isset($cliente3));
var_dump(isset($cliente));
var_dump(isset($cliente4));
var_dump(isset($cliente5['Nombre']));
var_dump(isset($cliente5['Código']));

include 'includes/footer.php';
