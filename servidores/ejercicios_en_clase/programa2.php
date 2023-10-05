<?php 
// recojo los datos que me envían desde 02_ejercicio
    $boton = $_POST['boton'];
    $nombre = $_POST['nombre'];
    $contrasenia = $_POST['contrasenia'];
    $fecha = $_POST['fecha'];
    $seleccion = $_POST['seleccion'];
    $escondido = $_POST['escondido'];
    echo $boton." ".$nombre." ".$contrasenia." ".$fecha." ".$seleccion." ".$escondido;


?>