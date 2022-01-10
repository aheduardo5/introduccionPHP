<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

if($autenticado && $admin){
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesion";
}

// If anidados...

$cliente = [
    'nombre' => 'Eduardo',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

echo "<br>";
if( empty(!$cliente)) {
    echo "Saldo disponible";

    if ($cliente['saldo'] > 0){
        echo "El saldo del cliente es {$cliente['saldo']}";
    } else {
        echo "El saldo del cliente es 0";
    }
} 

echo "<br>";
// else if
if($cliente['saldo'] > 0) {
    echo "El cliente cuenta con {$cliente['saldo']}";
} else if( $cliente['informacion']['tipo'] === 'Premium') {
    echo "El cliente es premium";
}else {
    echo "El cliente no es premium o no tiene saldo o no hay cliente definido amiko";
}

// Switch

$tecnologia = 'C++';

echo "<br>";
switch ($tecnologia) {
    case 'PHP':
        echo "{$tecnologia}, un excelente lenguaje";
        break;
    case 'JS':
        echo "{$tecnologia}, el lenguaje de la web, muy excelente";
        break;
    default:
        echo "{$tecnologia}, lenguaje no introducido en la BDD";
        break;
}

include 'includes/footer.php';