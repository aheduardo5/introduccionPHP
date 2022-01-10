<?php 
declare(strict_types=1);
include 'includes/header.php';

function sumar(int $numero1 = 0, int $numero2 = 0){
    echo $numero1+ $numero2;
}

sumar(30, 65);



include 'includes/footer.php';