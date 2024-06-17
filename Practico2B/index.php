<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="img/uruguay.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Tabla de cuadros</title>
</head>

<body>
    <table>
<?php
    $puntos = array(

        array(
            "cuadro" => "NAC",
            "escudo" => "img/nacional2.png",
            "puntosTotales" => 0,
            "pJugados" => 10,
            "pGanados" => 6,
            "pEmpatados" => 4,
            "pPerdidos" => 0,
            "gAFavor" => 7,
            "gEnContra" => 4,
            "diferencia" => 0
        ),

        array(
            "cuadro" => "PEÑ",
            "escudo" => "img/penarol.png",
            "puntosTotales" => 0,
            "pJugados" => 10,
            "pGanados" => 2,
            "pEmpatados" => 4,
            "pPerdidos" => 4,
            "gAFavor" => 3,
            "gEnContra" => 5,
            "diferencia" => 0
        ),

        array(
            "cuadro" => "RIV",
            "escudo" => "img/river.png",
            "puntosTotales" => 0,
            "pJugados" => 10,
            "pGanados" => 6,
            "pEmpatados" => 2,
            "pPerdidos" => 2,
            "gAFavor" => 8,
            "gEnContra" => 7,
            "diferencia" => 0
        ),

        array(
            "cuadro" => "DAN",
            "escudo" => "img/danubio.png",
            "puntosTotales" => 0,
            "pJugados" => 10,
            "pGanados" => 5,
            "pEmpatados" => 2,
            "pPerdidos" => 3,
            "gAFavor" => 7,
            "gEnContra" => 3,
            "diferencia" => 0
        ),

        array(
            "cuadro" => "LIV",
            "escudo" => "img/liverpol.png",
            "puntosTotales" => 0,
            "pJugados" => 10,
            "pGanados" => 7,
            "pEmpatados" => 0,
            "pPerdidos" => 3,
            "gAFavor" => 5,
            "gEnContra" => 2,
            "diferencia" => 0
        ),
        
        array(
            "cuadro" => "DEF",
            "escudo" => "img/defensor.png",
            "puntosTotales" => 0,
            "pJugados" => 10,
            "pGanados" => 1,
            "pEmpatados" => 4,
            "pPerdidos" => 5,
            "gAFavor" => 2,
            "gEnContra" => 6,
            "diferencia" => 0
        ),

        array(
            "cuadro" => "WAN",
            "escudo" => "img/wanderers.png",
            "puntosTotales" => 0,
            "pJugados" => 10,
            "pGanados" => 5,
            "pEmpatados" => 2,
            "pPerdidos" => 3,
            "gAFavor" => 5,
            "gEnContra" => 4,
            "diferencia" => 0
        ),

        array(
            "cuadro" => "PLA",
            "escudo" => "img/plazaColonia.png",
            "puntosTotales" => 0,
            "pJugados" => 10,
            "pGanados" => 4,
            "pEmpatados" => 2,
            "pPerdidos" => 4,
            "gAFavor" => 7,
            "gEnContra" => 4,
            "diferencia" => 0
        ),

        array(
            "cuadro" => "FEN",
            "escudo" => "img/fenix2.png",
            "puntosTotales" => 0,
            "pJugados" => 10,
            "pGanados" => 3,
            "pEmpatados" => 3,
            "pPerdidos" => 4,
            "gAFavor" => 3,
            "gEnContra" => 5,
            "diferencia" => 0
        )
    );

    echo ('<h3 id= "titulo" >Uruguayo 1ª División - TABLA APERTURA</h3>');

    function generarTabla($puntos) {

        foreach ($puntos as &$equipo) {
            $equipo['puntosTotales'] = ($equipo["pGanados"] * 3) + ($equipo["pEmpatados"] * 1);
            $equipo['diferencia'] = ($equipo["gAFavor"]) - ($equipo["gEnContra"]);
        }
        unset($equipo); // Desvincula el último elemento por referencia, si esto no esta el penultimo se repite
    
        // Ordena el array segun quien tiene mas puntos y mayor diferencia de goles
        usort($puntos, function($a, $b) {
            if ($b['puntosTotales'] === $a['puntosTotales']) {
                return $b['diferencia'] <=> $a['diferencia']; // ordenar la tabla segun la diferencia de goles 
            }
            return $b['puntosTotales'] <=> $a['puntosTotales'];
        });
    
    
        echo '<tr>';
        echo '<th>Posiciones</th>';
        echo '<th>Puntos</th>';
        echo '<th>PJ</th>';
        echo '<th>PG</th>';
        echo '<th>PE</th>';
        echo '<th>PP</th>';
        echo '<th>GF</th>';
        echo '<th>GC</th>';
        echo '<th>DIF</th>';
        echo '</tr>';
    
        foreach ($puntos as $equipo) {
            if($equipo["puntosTotales"] % 2 == 0){
            echo '<tr id = "gris">';
            echo '<td id = "centrarLogoYNombre"><img src=" '. $equipo["escudo"] .' "  width="64px" height="64px">';
            echo  $equipo["cuadro"]  .'</td>';
            echo '<th>' .$equipo["puntosTotales"] . '</td>';
            echo '<td>' . $equipo["pJugados"] . '</td>';
            echo '<td>' . $equipo["pGanados"] . '</td>';
            echo '<td>' . $equipo["pEmpatados"] . '</td>';
            echo '<td>' . $equipo["pPerdidos"] . '</td>';
            echo '<td>' . $equipo["gAFavor"] . '</td>';
            echo '<td>' . $equipo["gEnContra"] . '</td>';
            echo '<td>' . $equipo["diferencia"] . '</td>';
            echo '</tr>';
            }
            else {
                echo '<tr>';
                echo '<td id = "centrarLogoYNombre"><img src=" '. $equipo["escudo"] .' "  width="64px" height="64px">';
                echo  $equipo["cuadro"]  .'</td>';
                echo '<th>' . $equipo["puntosTotales"] . '</td>';
                echo '<td>' . $equipo["pJugados"] . '</td>';
                echo '<td>' . $equipo["pGanados"] . '</td>';
                echo '<td>' . $equipo["pEmpatados"] . '</td>';
                echo '<td>' . $equipo["pPerdidos"] . '</td>';
                echo '<td>' . $equipo["gAFavor"] . '</td>';
                echo '<td>' . $equipo["gEnContra"] . '</td>';
                echo '<td>' . $equipo["diferencia"] . '</td>';
                echo '</tr>';
            }
        }
        echo '</table>';
    } // function generarTabla

    generarTabla($puntos);

    ?>
</table>
</body>
</html>