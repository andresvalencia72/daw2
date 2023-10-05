<!-- programa que acomule un valor -->

 
    
    

<?php
        if(isset($_POST['boton2'])){
            $acumulador=$_POST['acumulador'];
        }else{
            $acumulador=0;
        }
?>

<form method=post name=formulario action=programa4.php>
        <label for="number"></label>
        <input type="number" name="numero" id="number">
        <input type="hidden"
        name=acumulador
        value= <?php echo $acumulador;?>
        >
        <input type="submit" value="boton1" name=boton1>
</form>