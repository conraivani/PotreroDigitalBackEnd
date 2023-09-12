<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
    <li>
    <?php
    $n=3;
    if ($n>=0) {
        echo "La variable n es positiva";
        echo "<br>";
    }
    else {
        echo "La variable n es negativa";
        echo "<br>";
    }
    ?>

    </li>

    <li>
    <?php
     $n=3;
     if ($n>1 & $n<10) {
         echo "La variable n es mayor a 1 y menor que 10";
         echo "<br>";
     }
     else {
         echo "La variable n no cumple la condición de ser mayor que 1 y menor que 10";
         echo "<br>";
     }
    ?>
    </li>

    <li>
    <?php
    $n=-1;
    if ($n>10 || $n<2) {
        echo "La variable n cumple la condición del enunciado";
        echo "<br>";
    }
    else {
        echo "La variable n no cumple la condición del enunciado";
        echo "<br>";
    }
    ?>
    </li>

    <li>
    <?php
    $numero1=6;
    $numero2=12;

    if ($numero1>$numero2) {
        echo "La suma de las variables numero1 y numero2 es ="; 
        echo $numero1+$numero2;
        echo "<br>";
        echo "La resta de las variables numero1 y numero2 es ="; 
        echo $numero1-$numero2;
        echo "<br>";
    }
    elseif ($numero2>$numero1) {
        echo "La multiplicación de las variables numero2 y numero1 es ="; 
        echo $numero1*$numero2;
        echo "<br>";
        echo "La división de las variables numero2 y numero1 es ="; 
        echo $numero2/$numero1;
        echo "<br>";
        echo "El resto de las variables numero2 y numero1 es ="; 
        echo $numero2%$numero1;
    } else {
        echo "Las variables numero2 y numero1 son iguales"; 
        echo "<br>";
    }
    
    ?>
    </li>
</ol>
</body>
</html>