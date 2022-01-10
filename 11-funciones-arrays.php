<?php include 'includes/header.php';

// in_array - Buscar elementos en un arreglo
$carrito = ['Tablet', 'Computadora', 'Television'];



var_dump( in_array('Tablet', $carrito));
var_dump( in_array('Audifonos', $carrito));


// Ordenar elementos de n arreglo
$numeros = array(1,3,4,5,1,2);
sort($numeros); // De menor a mayor
rsort($numeros); // De mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar arreglo asociativo

$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Eduardo'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";


asort($cliente); // Ordena por valores (Orden alfabetico)
arsort($cliente); // ordena por valores (Z primero)
ksort($cliente); // Ordena las llaves (Orden alfabetico)
krsort($cliente); // Ordena las llaves (Orden alfabetico al revez)


echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';