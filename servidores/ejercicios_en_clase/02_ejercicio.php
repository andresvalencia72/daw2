<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <form name="formulario1" method="post" action="programa2.php">
        <label for="nombre">nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="contrasenia">Contraseña:</label>
        <input type="password" name=contrasenia id=contrasenia>
        <br>
        <select name="seleccion" id="">
            <option value="1">Uno</option>
            <option value="2">Dos</option>
        </select>
        <br>
        <input type="date" name=fecha>
        <br>
        <input type="submit" name="boton" value="Enviar datos">
        <input type="hidden" name="escondido" value=33>
    </form>
</body>
</html>
<?php?>