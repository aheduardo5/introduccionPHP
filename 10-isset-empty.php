<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Eduardo','Jose','Pepe');
$cliente = [
    'nombre' => 'Eduardo',
    'saldo' => 200
];

// EMPTY <- Este nos permitira ver si un arreglo se encuentra vacio

var_dump( empty($clientes));
var_dump( empty($clientes2));
var_dump( empty($clientes3));

// Isset - Revisar si un arreglo esta creado o una propiedad esta definida

echo "<br>";
var_dump( isset($cliente4) );


//Tambien permite revisar si una propiedad de un arreglo asociativo existe
var_dump( isset($cliente['nombre']));
var_dump( isset($cliente['codigo']));
include 'includes/footer.php';