<?php include 'includes/header.php';

$nombreCliente = "cesar alan";
// Conocer la ectención de una string 
echo strlen("$nombreCliente");
echo ("<br/>");
var_dump($nombreCliente);
echo ("<br/>");

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);
echo ("<br/>");

// Convertirlo a MAYUSCULAS 
echo strtoupper($nombreCliente);
echo ("<br/>");

// Convertirlo a minisculas
echo strtolower($nombreCliente);
echo ("<br/>");

// Revisar si un string existe o no 
echo strpos($nombreCliente, "cesar");
$tipoCliente = "Premium";
echo ("<br/>");
echo "El cliente" . $nombreCliente . "es" . $tipoCliente;
// o se puede usar la sintaxis similar del templete string de js echo "El Cliente {$nombreCliente} es ${tipoCliente}"


include 'includes/footer.php';
