<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : ?string { // Cuando la funcion no tenga que retornar nada imprimir se aconseja poner un VOID
    if($autenticado){
        return "El usuario esta autenticado";
    }else {
        return "No autenticado";
    }
}

$usuario = usuarioAutenticado(TRUE);

echo $usuario;

include 'includes/footer.php';