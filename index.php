<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2>Variables y constantes</h2>";
        define ("DATO","dato de ejemplo");
        echo "La constante dato es ".DATO;
        $numero=5;
        $numero++;
        echo "<p>El numero es ".$numero." </p>"; #El número será 6
        echo "<hr>";
        echo "<h3>Operadores</h3>";
        $numero1=10;
        $numero2=15;
        if($numero1>=$numero2){
            echo "<p>El primer numero es mayor</p>";
        }
        else {
            echo "<p>El segundo numero es mayor</p>";
        }
        echo "<hr>";
        echo "<h3>Estructuras de control</h3>";
        for ($i=0;$i<=10;$i++){
            echo $i."-";
        } 
        echo "<br>";
        $a=0;
        while($a<=10){
            echo $a++."-";
        }  
        ?>
</body>
</html>