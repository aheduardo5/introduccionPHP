<?php include 'includes/header.php';

// While

$i = 0; // Iniializador

while($i < 10) {

    echo $i . "<br>";
    $i++; // INCREMENTO 
}

// Do while
// echo "<br>";
// $i = 0;

// do {

//     echo $i . "<br>";
//     $i++;
// }while($i < 10);


/*
    * 3 imprimir fizz
    * 5 imprimir Buzz
    * 3 y 5 imprimir FIZZ BUZZ
*/



// for loop
// echo "<br>";
// for($i= 1; $i < 1000; $i++){
//     if($i % 3 == 0 && $i % 5 === 0){
//         echo $i . "- FIZZ BUZZ <br>";
//     } else if($i % 3 === 0){
//       echo $i . "- FIZZ <br>";
//     } else if ($i % 5 === 0){
//         echo $i . "-BUZZ <br>";
//     }else {
//         echo $i . "<br>";
//     }
    
// }

// FOR EACH LOOP
$clientes = array('Eduardo','Jose','Pepe');

foreach( $clientes as $cliente) {
    echo $cliente . "<br>";
}

for ($i = 0; $i < count($clientes); $i++){
    echo $clientes[$i] . "<br>";
}

$cliente = [ // ARREGLO ASOCIATIVO
    'nombre' => 'Eduardo',
    'saldo' => 1000,
    'tipo' => 'Premium'
];

foreach( $cliente as $key => $valor){
    echo $key . "- " . $valor . "<br>";
}
include 'includes/footer.php';

