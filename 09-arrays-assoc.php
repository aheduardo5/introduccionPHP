<?php include 'includes/header.php';

/* LOS ARREGLOS ASOCIATIVOS SON EL EQUIVALENTE A LOS OBJETOS EN JS */


$cliente = [
    'nombre' => "Eduardo",
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium',
        'disponible' => 100
    ]
];


echo "<pre>"; 
var_dump($cliente);
echo "</pre>";

echo $cliente['nombre'];
echo "<br>";
echo $cliente['saldo'];
echo "<br>";
echo $cliente['informacion']['tipo'];
echo "<br>";

$cliente['codigo'] = 13139545;

echo $cliente['codigo'];
echo "<br>";

include 'includes/footer.php';