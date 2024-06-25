<?php

function Manipulacion_cadenas(){

    $cadena = "Este es un mensaje de error. Si ves otro error, por favor reporta el error.";

    $prueba = "hola";
    
    echo $cadena;
    
    $cadena_modificada = str_replace("error", "éxito", $cadena);
    echo '<br> 1- '. $cadena_modificada;
    
    $longitudDeseada = substr($cadena_modificada, 10, 20); 
    echo'<br> 2- '. $longitudDeseada;
    
    echo '<br> 3- '. strlen($cadena_modificada);
    
    echo '<br> 4- '. str_word_count($cadena_modificada);
    
    echo '<br> 5- '. strtoupper($cadena_modificada);
    
    $cadenaToArray = str_split($cadena_modificada); // le puse To porque me quedaba raro poner AArray
    array_splice($cadenaToArray, 3, 1);
    echo '<br> 6- ';
    print_r($cadenaToArray);
}



Manipulacion_cadenas();




?>