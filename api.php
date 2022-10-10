<?php
// Glosario de PHP
    // Camel-case
    // Extructura basica de los lenguajes de programacion
    // Que es un seudo-Lenguaje programacion / un lengaje de programacion
    // codigo limpio / codigo sucio
    // Variables 
    // Maeras de escribir las variables en PHP
    // 7 tipos de datos primitivos en PHP
    // Declarar de Variable / Inicializacion de Variable
    //  para que srive el Punto y coma en programacion (secuencia)
    // palabras reservadas del sistema
    // Que son los operadores (operador de asignacion)
    // Items en las coleciones de datos PHP
    // echo / var_dump / print_r (imprimir en pantalla en PHP) 
    header('Access-Control-Allow-Origin: *');
    $nombreCompleto="Paula Andrea Salazar Agudelo";
    $edad=24;
    $altura=1.58;
    $soyProfesor=false;
    $pasaTiempo=["Manualidades","Cantar","Escuchar musica","Leer"];
    $direccion=new stdClass();
    $direccion->principal="Calle 11b";
    $direccion->secundaria="Avenida 11a";

    echo($nombreCompleto);
    echo("<br>");
    echo($edad);
    echo("<br>");
    echo($altura);
    echo("<br>");
    var_dump($soyProfesor);
    var_dump($pasaTiempo);
    var_dump($direccion);
    echo"<br>soy el servidor ".$_SERVER["HTTP_HOST"];


?>
