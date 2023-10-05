


<?php
// como saber si una variale existe o no
    $numero = $_POST['numero'];

    $acumulador = $_POST['acumulador'];

    $acumulador += $numero;
    echo $acumulador;
    
    echo "<form name=formulario2 method=post action=04_ejercicio.php>";
    echo " <input type=submit name=boton2 value=boton2>";
    echo "<input type=hidden name=acumulador value=" .$acumulador.">";
    echo "</form>";

    
?>

