<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    <?php
        $a=33;
        echo "<h1>Hola, la varibale a vale: </h1>" .$a ;
        $a = "Hola, manolo";
        echo "Hola, la variable a vale" .$a;
        //ciclos  
        for($i=0;$i<10;$i++){
            echo "la variable vale: " .$i;
            echo "<br>";
        }
        
        // phpinfo();

        //condicionales
        $p=12;
        if($p>10){
            echo "El número es grande";    
        }else{
            echo "El número es pequeño";
        }
        $a = 1;
        while($a<100){
            echo "<br>";
            echo "La a vale: " .$a;
            $a++;
            
        }

        // matrices
        echo "<br>"."<h2>Matrices</h2>"."<br>";
        // $a = array(); forzar a que a sea un array
        $b[1] = 3;
        $b[2] = 'andrés';
        $b['tercero'] = 33.4;
        foreach($b as $indice=>$valor){
            echo "El indice es: " .$indice."<br>";
            echo "El valor es " .$valor."<br>";
            echo "<hr>";
        }

        $c['pedro']['sueldo']=1200;
        $c['pedro']['primo']='Juan';
        $c['pedro']['localidad']='Vinuesa';
        
        $c['juan']['sueldo']=3200;
        $c['juan']['primo']='pedro';

        $c[8]['sueldo']=4800;
        $c['pedro']['primo']=9;

        foreach($c as $i=>$valor){
            echo "indice: " .$i."<br>";
            // echo "valor: ".$valor."<br>";
            foreach($valor as $j=>$valor2){
                echo "El indice2 es: ".$j."<br>";
                echo "El contenido es: ".$valor2."<br>";

            }
            echo "<hr>";
        }
    ?>
</body>
</html>
