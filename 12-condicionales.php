<?php include 'includes/header.php';

$autenticado = true;
$admin = false;
if ($autenticado || $admin) {
    echo 'Usuario autenticado correctamente';
} else {
    echo 'Usuario no autenticado, Inicia sesión';
};

// If anidados
$cliente = [
    'Nombre' => 'Cesar',
    'Saldo' => 350,
    'Suscripcion' => [
        'Cuenta' => 'Premium'
    ]
];
echo "<br>";
if (empty($cliente)) {
    echo 'El arreglo de cliente esta vacio';
}

if ($cliente['Saldo'] > 0) {
    echo 'Saldo disponible';
} else {
    echo 'No tiene fondos suficientes';
}

// else if 
echo "<br>";
if ($cliente['Saldo' > 0]) {
    echo "El cliente tiene saldo";
} else if ($cliente['Suscripcion']['Cuenta'] === 'Premium') {
    echo "El cliente es premium";
} else {
    echo "No hay cliente definido";
}

// Switch 
echo "<br>";
$lenguajes = 'PHP';
switch ($lenguajes) {
    case 'PHP':
        echo "PHP esencial para backend y bases de datos";
        break;
    case 'JavaScrip':
        echo "JS el lenguaje de la web";
        break;
    case 'HTML y CSS':
        echo "Pilares para el front-end";
        break;
    case 'Python':
        echo "El lenguaje del presente";
        break;

    default:
        echo "Necesitas otro lenguaje ? ";
        break;
}


include 'includes/footer.php';
