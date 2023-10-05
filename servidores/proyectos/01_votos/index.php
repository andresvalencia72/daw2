<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/styles.css">
    <title>Votos</title>
</head>

<body>

    <!-- inicialización de la app -->
    <?php
    if (isset($_POST['votar'])) {
        $estudiantes = unserialize($_POST['estudiantes']);

        // Recojo el votante
        $estudiantes[$_POST['votante']]['votado'] = true;
        //Recojo el votado
        $estudiantes[$_POST['votado']]['votos'] += 1;
        $cont = $_POST['cont'];
        $cont = intval($cont) + 1;
    } else {
        $estudiantes[0]['nombre'] = 'Voto en blanco';
        $estudiantes[0]['votado'] = true;
        $estudiantes[0]['votos'] = 0;
        $estudiantes[1]['nombre'] = 'Pablo';
        $estudiantes[1]['votado'] = false;
        $estudiantes[1]['votos'] = 0;
        $estudiantes[2]['nombre'] = 'Jorge';
        $estudiantes[2]['votado'] = false;
        $estudiantes[2]['votos'] = 0;
        $estudiantes[3]['nombre'] = 'Dani';
        $estudiantes[3]['votado'] = false;
        $estudiantes[3]['votos'] = 0;
        $estudiantes[4]['nombre'] = 'Marcos';
        $estudiantes[4]['votado'] = false;
        $estudiantes[4]['votos'] = 0;
        $estudiantes[5]['nombre'] = 'Jesus';
        $estudiantes[5]['votado'] = false;
        $estudiantes[5]['votos'] = 0;
        $estudiantes[6]['nombre'] = 'Carla';
        $estudiantes[6]['votado'] = false;
        $estudiantes[6]['votos'] = 0;
        $estudiantes[7]['nombre'] = 'Carlos';
        $estudiantes[7]['votado'] = false;
        $estudiantes[7]['votos'] = 0;
        $estudiantes[8]['nombre'] = 'Aldo';
        $estudiantes[8]['votado'] = false;
        $estudiantes[8]['votos'] = 0;
        $estudiantes[9]['nombre'] = 'Nacho';
        $estudiantes[9]['votado'] = false;
        $estudiantes[9]['votos'] = 0;
        $estudiantes[10]['nombre'] = 'Mario';
        $estudiantes[10]['votado'] = false;
        $estudiantes[10]['votos'] = 0;
        $estudiantes[11]['nombre'] = 'Dimitro';
        $estudiantes[11]['votado'] = false;
        $estudiantes[11]['votos'] = 0;
        $estudiantes[12]['nombre'] = 'Adam';
        $estudiantes[12]['votado'] = false;
        $estudiantes[12]['votos'] = 0;
        $estudiantes[13]['nombre'] = 'Antonio';
        $estudiantes[13]['votado'] = false;
        $estudiantes[13]['votos'] = 0;
        $estudiantes[14]['nombre'] = 'Ivan';
        $estudiantes[14]['votado'] = false;
        $estudiantes[14]['votos'] = 0;
        $estudiantes[15]['nombre'] = 'Andres';
        $estudiantes[15]['votado'] = false;
        $estudiantes[15]['votos'] = 0;
        $cont = 0;
    }


    echo "<header style=display:flex;align-items:center;>";
    echo '<figure style=width:50px; ><img src=src/img/logo.jpg width=100%></figure>';
    echo "<h1>vote</h1>";
    echo "</header>";
    echo "<main>";


    if ($cont < sizeof($estudiantes) - 1) {
        echo "<form action=index.php method=post>";
        echo "<p>¿Quien eres?</p>";
        echo "<div class=wrapper>";
        foreach ($estudiantes as $indice => $valor) {
            if ($valor['votado'] == false) {
                echo "<div class='radio_estudiante'>";
                echo "<label for=votante" . $indice . ">";
                echo '<figure>';
                echo '<img src="src/img/'.$indice.'-min.jpg" alt="" class="estudiante_imagen" />';
                echo '</figure>';
                echo '<div class="seleccionado">';
                echo "<input required type=radio id=votante" . $indice . " name='votante' value='" . $indice . "' />";
                echo '<p>' . $valor['nombre'] . '</p>';
                echo '</div>';
                echo '</label>';
                echo '</div>';

            }
        }
        echo "</div>";
        echo "<h2>Candidatos</h2>";
        echo "<div class=container>";


        foreach ($estudiantes as $indice => $valor) {
            // echo "<option value=" . $indice . ">" . $valor['nombre'] . "</option>";
            echo "<article class=card>";
            echo "<label for=voto" . $indice . ">";
            echo "<div class=container_card>";
            echo "<figure>";
            echo '<img src="src/img/'.$indice.'-min.jpg" alt="" class="estudiante_imagen" width=100% />';
            
            echo "</figure>";
            echo "<input required type=radio id=voto" . $indice . " name=votado value='" . $indice . "'/>";
            echo "<p>" . $valor['nombre'] . "</p>";
            echo "</label>";
            echo "</div>";
            echo "</article>";
        }

        echo "<input type=hidden name=estudiantes value='" . serialize($estudiantes) . "'>";
        echo "<input type=hidden name=cont value=" . $cont . ">";


        echo "<input type=submit value=votar name=votar class='btnVotar'>";

        echo "</form>";
    }else{
        echo "<h2>Resultados</h2>";

        foreach ($estudiantes as $indice => $valor) {
        if ($valor['votos'] != 0) {
    
            echo "<p>" . $valor['nombre'] . ":" . $valor['votos'] . "</p>";
        }
    }
    }



    // Resultados
    
    // foreach ($estudiantes as $indice => $valor) {
    //     if ($valor['votos'] != 0) {
    
    //         echo "<p>" . $valor['nombre'] . ":" . $valor['votos'] . "</p>";
    //     }
    // }
    
    echo "</main>";
    echo "</body>";


    ?>

</html>





<!-- 
// var_dump($estudiantes);
/*
if ($cont < sizeof($estudiantes) - 1) {
    echo "<form action=votos2.php method=get>";
    echo "<label for=voto>¿Quien eres?</label>";
    echo " <select name=votante >";

    foreach ($estudiantes as $indice => $valor) {
        if ($valor['votado'] == false) {
            echo "<option value=" . $indice . ">" . $valor['nombre'] . "</option>";
        }
    }

    echo "</select>";

    echo "<br>";
    echo "<label for=voto>¿Por quien votas?</label>";
    echo "<select name=votado>";
    foreach ($estudiantes as $indice => $valor) {
        echo "<option value=" . $indice . ">" . $valor['nombre'] . "</option>";
    }
    echo "</select>";
    echo "<br>";

    echo "<input type=hidden name=estudiantes value='" . serialize($estudiantes) . "'>";
    echo "<input type=hidden name=cont value=" . $cont . ">";

    echo "<input type=submit value=votar name= votar>";

    echo "</form>";
}



echo "<hr>";
echo "<h2>Resultados Votación<h2>";
foreach ($estudiantes as $indice => $valor) {
    if ($valor['votos'] != 0) {

        echo "<p>" . $valor['nombre'] . ":" . $valor['votos'] . "</p>";
    }
}




?>
*/ -->