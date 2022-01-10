<?php include 'includes/header.php';

/* EN PHP EXISTEN DOS TIPOS DE ARREGLOS: INDEXADOS Y ASOCIATIVOS*/

$carrito = ['Tablet', 'Television', 'Computadora']; // o pueedes usar $carrito = array(); las dos son correctas


// UTIL PARA VER LOS CONTENIDOS DE UN ARRAY
echo "<pre>"; // UTILIZAMOS LA ETIQUETA PRE PARA UE NUESTRO ARREGLO SE DESPLIEGUE
var_dump($carrito);
echo "</pre>";

// ACCEDER A UN ELEMENTO DE UN ARRAY
echo $carrito[1];

// AÑADE UN ELEMENTO AL ARREGLO
$carrito[3] = "Nuevo producto...";


// AÑADE UN ELEMENTO NUEVO AL FINAL
array_push($carrito, 'Audifonos');

// AÑADE UN ELEMENTO NUEVO AL INICIO 
array_unshift($carrito,"SmartWatch");


echo "<pre>"; 
var_dump($carrito);
echo "</pre>";

include 'includes/footer.php';