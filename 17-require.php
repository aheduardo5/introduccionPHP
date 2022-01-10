<?php include 'includes/header.php';

/*
Cuando usar require:
Cuando tengas funciones criticas para tu aplicacion como una funcion para una conexion a la base de datos o todas las funciones
usa include :
Cuando quieras incluir otros templates
require_once :
Incluye una sola vez, primero revisa que el archivo sea incluido y si ya fue incluido lo ignora

*/

require 'funciones.php';

iniciarApp();

include 'includes/footer.php';