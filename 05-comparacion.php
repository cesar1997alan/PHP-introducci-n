<?php include 'includes/header.php';
$numero1 = 20;
$numero2 = 40;
$numero3 = 40;
$numero4 = "40";

// False
var_dump($numero1 > $numero2);
echo "<br/>";
// True
var_dump($numero1 < $numero2);
echo "<br/>";

// Igualdad
var_dump($numero2 == $numero3);
echo "<br/>";

// Igualdad por valor y tipo de dato
var_dump($numero3 === $numero4);
echo "<br/>";

// Spaceship operator o Nave espacial -1 si izquierda es menor, 0 si son iguales y 1 si derecha es mayor
var_dump($numero3 <=> $numero4);
echo "<br/>";

include 'includes/footer.php';
