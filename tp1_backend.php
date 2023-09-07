<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trabajo práctico 1</h1>
    <?php
    //ejericio 1
    print "<h3>Ejercicio 1 </h3>";
    print "<p> Hola Mundo</p>"; 

    //ejericio 2
    print "<h3>Ejercicio 2 </h3>";
    $saludo = "Hola Mundo";
    print "<p>$saludo</p>"; 

    //ejericio 3
    print "<h3>Ejercicio 3 </h3>";
    $variable1 = 5;
    $variable2 = 9;

    $suma = $variable1+$variable2; 
    print "<p>$suma</p>";

    $resta = $variable2-$variable1; 
    print "<p>$resta</p>";

    $multplicacion = $variable1*$variable2; 
    print "<p>$multplicacion</p>";

    $division = $variable2/$variable1;
    print "<p>$division</p>";

    $resto = $variable2%$variable1; 
    print "<p>$resto</p>";

    //ejericio 4
    print "<h3>Ejercicio 4 </h3>";
    $celsius = 20; 
    $simbolo = "ºC";
    $fahrenheit = ($celsius*1.8)+ 32;
    print "<p>$fahrenheit$simbolo</p>"; 


    //ejericio 5
    //a
    print "<h3>Ejercicio 5</h3>";
    print "<h4>a</h4>";
$base = 18; 
$altura = 12;
$unidad = "cm2";
$perimetroRectangulo = $base*2+$altura*2;
print "<p>$perimetroRectangulo$unidad</p>";

$areaRectangulo = $base*$altura;
print "<p>$areaRectangulo$unidad</p>";

//b
print "<h4>b</h4>";
$pi = 3.1416;
$radio = 30;
$perimetroCirculo = 2*$pi*$radio;
print "<p>$perimetroCirculo$unidad</p>";
$areaCirculo = $pi*($radio**2);
print "<p>$areaCirculo$unidad</p>"; 
    ?>
</body>
</html>