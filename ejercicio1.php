<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo 'Ejercicio 1 <br>';
        $nota = 60;
        if($nota>=90){
            $NotaFinal="A";
            echo "Usted tiene una calificacion de nivel: ".$NotaFinal;
            }
        elseif($nota>=80){
            $NotaFinal="B";
            echo "Usted tiene una calificacion de nivel: ".$NotaFinal;
            }
        elseif($nota>=70){
            $NotaFinal="C";
            echo "Usted tiene una calificacion de nivel: ".$NotaFinal; 
            }
        elseif($nota<=69){
            $NotaFinal="F";
            echo "Usted tiene una calificacion de nivel: ".$NotaFinal; 
            }
    
    echo '<br> Ejercicio 2 <br>';
        $hora=26;
        if($hora<12){
            echo 'Buenos dias';
            }
      elseif($hora>=12 && $hora<=18){
            echo 'Buenas tardes';
            }
      elseif($hora>18 && $hora<=24){
            echo'Buenas noches';
            }
      elseif($hora>24){
            echo 'La hora ingresada no es correcta (00-24)';
            }

    echo '<br> Ejercicio 3 <br>';
        $edad = 64;
        if($edad<18){
            echo 'La persona es menor de edad';
            }
        elseif($edad>=18 && $edad<65){
            echo 'La persona es un adulto';
            }
        elseif($edad>=65){
            echo 'La persona es una persona mayor';
            }
    ?>
</body>
</html>
