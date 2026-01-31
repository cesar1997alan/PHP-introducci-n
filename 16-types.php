<?php

declare(string_type=1);
include 'includes/header.php';
function usuarioAutenticado(bool $autenticado): string
{
    if ($autenticado) {
        return "El usuario esta autenticado correctamente";
    } else {
        return "Por favor inicie sesión";
    }
}

$usuario = usuarioAutenticado(false);
echo $usuario;



include 'includes/footer.php';
