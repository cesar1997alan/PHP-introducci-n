<?php include 'includes/header.php';
//Arreglos indexados
$carrito = ['smartphone', 'smarttv', 'consola de videojuegos', 'tablet'];
echo "<pre>";
var_dump($carrito);
echo "</pre>";
// Acceder a un elemento del array
echo $carrito[2];
// Añador un elemento nuevo conociendo la posició
echo $carrito[5] = "Nuevo producto...";
// Añadiendo un elemento nuevo al final 
array_push($carrito, 'Audifonos');
// Añadiendo un elemento nuevo al final 
array_unshift($carrito, 'smartwach');

// Util para ver los contenidos de un Array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Otra forma de hacer arreglos 
$cliente = array('cliente 1', 'cliente 2', 'cliente 3');
echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';
