<?php

declare(strict_types=1);
include 'includes/header.php';
// Crear nuestras funciones 

function suma(int $numero1 = 0, int $numero2 = 0) //Parametros
{
    echo $numero1 + $numero2;
}

suma(10, 15); //Argumentos
echo '<br>';
suma(15);

//suma(numero1: 10, numero2: 15); 

include 'includes/footer.php';
