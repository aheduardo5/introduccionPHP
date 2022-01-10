<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero1 >= $numero2);
echo "<br>";

var_dump($numero1 <= $numero2);
echo "<br>";

var_dump($numero2 == $numero3); 
echo "<br>";

var_dump($numero3 == $numero4); // DOBLE SIGNO REVISA EL VALOR
echo "<br>";

var_dump($numero3 === $numero4); // TRIPLE SIGNO REVISA EL VALOR Y TIPO DE DATO
echo "<br>";

// -1 SI IZQUIERDA ES MENOR, 0 S9 ES IGUAL, 1SI IZQUIERDA ES MAYOR

var_dump($numero1 <=> $numero2); 
echo "<br>";

var_dump($numero2 <=> $numero3); 
echo "<br>";

var_dump($numero2 <=> $numero1); 
echo "<br>";

include 'includes/footer.php';