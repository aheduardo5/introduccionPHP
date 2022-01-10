<?php include 'includes/header.php';

$nombreCliente = "Eduardo Aguilar";


// CONOCER EXTENSION DE UN STRING
echo strlen($nombreCliente); // TE DA LA LONGITUD DE LA VARIABLE
var_dump($nombreCliente);



//ELIMINAR ESPACIOS EN BLANCO

$texto = trim($nombreCliente);
echo $texto;
echo strlen($texto);

//CONVERTIRLO A MAYUSCULA

echo strtoupper($nombreCliente);


//CONVERTIR A MINUSCULAS

echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace("Eduardo", "E", $nombreCliente);


// REVISAR SI UN STRING EXISTE O NO

echo strpos($nombreCliente, "Eduardo"); // SI PONES ALGO QUE NO EXISTE PHP NO LO IMPRIME


// CONCATENAR VARIABLE

$tipoCliente = "Premium";

echo "<br>";

echo "El cliente  " . $nombreCliente . " es " . $tipoCliente; // PRIMER FORMA DE CONCATENAR
echo "<br>";
echo "El cliente {$nombreCliente} es {$tipoCliente}"; // SEGUNDA MANERA DE CONCATENAR PARECIDA A JS
// Hay que tomar en cuenta que solamente funciona con llaves dobles ("")
include 'includes/footer.php';