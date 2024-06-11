<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $departamentos = array ("Montevideo","Canelones","Maldonado","Rocha","Colonia","San José","Soriano","Paysandú","Durazno","Flores","Tacuarembó","Rivera","Salto","Artigas","Treinta y Tres","Lavalleja","Cerro Largo","Rio Negro");
    $capitalDepartamentos = array ("Montevideo","Canelones","Maldonado","Rocha","Colonia del Sacramento","San jose de Mayo","Mercedes","Paysandú","Durazno","Trinidad","Tacuarembo","Rivera","Salto","Artigas","Treinta y Tres","Minas","Melo","Fray Bentos");
    echo (mostrarArray($departamentos)); 
    echo ("<hr>");
    echo (mostrarArray($capitalDepartamentos));

    $arrayCombinados = array_merge($departamentos, $capitalDepartamentos);
    echo("<hr> <h3>Estos son los elemntos de cada array combinados:</h3> <br>");
    echo(mostrarArray($arrayCombinados));

    echo("<hr> <h3>Estos son los elemntos de cada array combinados pero ordenados de manera alfabetica:</h3> <br>");
    sort($arrayCombinados);
    mostrarArray($arrayCombinados);

    echo("<hr> <h3>Estos son los elemntos de cada array combinados ordenados de manera alfabetica y elimnando el ultimo elemento:</h3> <br>");
    array_pop($arrayCombinados);
    mostrarArray($arrayCombinados);

    function mostrarArray($arreglo){
        foreach($arreglo as $indice => $valor) {
            echo " [".$indice." - ".$valor."] ";
            if($indice % 5 == 0 && $indice > 0){
                echo "<br>";
            }
        }
    }
    ?>
</body>
</html>