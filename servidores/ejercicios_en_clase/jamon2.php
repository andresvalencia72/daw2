<?php
    $numero=$_GET['numero'];
    echo $numero;
    echo "<hr>";
    $nombre = $_GET['letras'];
    echo $nombre;
    echo "<hr>";
    $jamon=unserialize($_GET['jamon']);
    foreach($jamon as $i => $valor){
        foreach($valor as $i2 => $valor2){
            echo $i ." ".$i2." ".$valor2; 
            echo "<br>";
        }
    }
    
?>