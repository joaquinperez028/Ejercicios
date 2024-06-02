<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    Ejercicio 1:

    Imprimir una tabla de multiplicar

    Escribe un programa que imprima la tabla de multiplicar de un número
    */
    echo 'Ejercicio 1 <br>';
    $numero= 7;
    for($i= 1; $i <= 10; $i++){
        $tabla= $numero*$i;
        echo $numero.' x '.$i .'= '.$tabla.'<br>'; 
    }


    /*
    Ejercicio 2:

    Escribe un programa que determine el nombre del mes basado en un número del 1 al 12.

    Y dado el nombre del mes determine a que estación pertenece.    
    */
    echo '<br> Ejercicio 2 <br>';
    $Mes= 12;


    if($Mes == 12 || $Mes == 1 || $Mes == 2){
        $Estacion= 'Verano';
    }
    elseif($Mes == 3 || $Mes == 4 || $Mes == 5){
        $Estacion= 'Otoño';
    }
    elseif($Mes == 6 || $Mes == 7 || $Mes == 8){
        $Estacion= 'Invierno';
    }
    elseif ($Mes == 9 || $Mes == 10 || $Mes == 11) {
        $Estacion= 'Primavera';      
    }


    switch ($Mes) {
        case 1:
            echo 'El mes elegido es: Enero y pertenece a la estacion de: '.$Estacion;
            break;
        case 2:
            echo 'El mes elegido es: Febrero y pertenece a la estacion de: '.$Estacion;
            break;
        case 3:
            echo 'El mes elegido es: Marzo y pertenece a la estacion de: '.$Estacion;
            break;
        case 4:
            echo 'El mes elegido es: Abril y pertenece a la estacion de: '.$Estacion;
            break;
        case 5:
            echo 'El mes elegido es: Mayo y pertenece a la estacion de: '.$Estacion;
            break;
        case 6:
            echo 'El mes elegido es: Junio y pertenece a la estacion de: '.$Estacion;
            break;
        case 7:
            echo 'El mes elegido es: Julio y pertenece a la estacion de: '.$Estacion;
            break;
        case 8:
            echo 'El mes elegido es: Agosto y pertenece a la estacion de: '.$Estacion;
            break;
        case 9:
            echo 'El mes elegido es: Septiembre y pertenece a la estacion de: '.$Estacion;
            break;
        case 10:
            echo 'El mes elegido es: Octubre y pertenece a la estacion de: '.$Estacion;
            break;
        case 11:
            echo 'El mes elegido es: Noviembre y pertenece a la estacion de: '.$Estacion;
            break;
        case 12:
            echo 'El mes elegido es: Diciembre y pertenece a la estacion de: '.$Estacion;
            break;
        default:
            echo "Error, Recuerde que los meses van del 1-12";
            break;
    }

    /*
Ejercicio 3:

Escribe un programa que sume todos los números enteros desde el 1 hasta un número dado por el usuario, pero solo si el número es positivo. 
Si el número es negativo o cero, imprime un mensaje de error.
    */
    echo '<br> Ejercicio 3 <br>';
    $numSuma=10;
    $sumaTotal= 0;
    if($numSuma <=0){
        echo 'Error, El numero ingresado tiene que ser mayor a 0';
    }
    else{
        for($x=1; $x<=$numSuma; $x++){
        $sumaTotal = $sumaTotal + $x;
        }
    echo 'La suma total de todos los numeros hasta el numero ingresado es de: '.$sumaTotal;
    }


    ?>
</body>
</html>