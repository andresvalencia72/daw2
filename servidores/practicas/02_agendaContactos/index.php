<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Agenda | Práctica 2</title>
</head>

<body>
    <header>
        <figure>
            <img src="src/img/logo.png" alt="logo" width="50px">
        </figure>
        <h1>Contact!</h1>
    </header>

    <main>

        <?php
        if (isset($_GET['guardar'])) {
            echo "<h2>Tus Contactos</h2>";
            echo "<section class=contactos>";
            $contactos = unserialize($_GET['contactos']);


            $nombre = $_GET['nombre'];
            if($nombre != ''){
                $contactos[$nombre] = $_GET['telefono'];
                $img=1;
                foreach ($contactos as $indice => $valor) {
                    echo " <article class=contacto>";
                    echo "<figure>";
                    echo "<img src=src/img/{$img}-min.jpg alt=>";
                    echo "</figure>";
                    echo "<div>";
                    echo "<p>{$indice}</p>";
                    echo "<p>{$valor}</p>";
                    echo "</div>";
                    echo "</article>";
    
                    $img++;
                    
                }
            }
           

        } else {
            $contactos = array();
        }

        echo "</section>";
        ?>

        <section class="addContact">


            <?php
   
            echo "<h2>Añadir</h2>";


            echo "<form action=index.php>";
            echo "<label for=nombre>nombre:</label>";
            echo "<input type=text id=nombre name=nombre required autofocus>";
            echo "<label for=telefono>teléfono</label>";
            echo "<input type=number id=telefono name=telefono required>";
            echo "<input type=hidden name=contactos value='" . serialize($contactos) . "'>";
            echo "<input type=submit name=guardar>";
            echo "</form>";


            ?>

        </section>
    </main>

</body>

</html>