<?php
    $numero = 33;
    $letras = 'Mari Carmen';
    $jamon[1][1] = 22;
    $jamon[1][2] = 'Hola';
    $jamon['dos']['tres'] = 34.25;

    // var_dump($jamon); mostrar contenido de una variable
    
    echo "<form name=formularios method=get action=jamon2.php>";
    echo "<input type=hidden name=numero value=" .$numero.">";
    echo "<input type=hidden name=letras value='" .$letras."'>";
    echo "<input type=hidden name=jamon value='" .serialize($jamon)."'>";
    echo "<input type=submit name=boton value=dale>";
    echo "</form>";
?>