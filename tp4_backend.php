<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
 <?php
 $pares = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
 foreach ($pares as $valor) {
    print "<p>$valor</p>\n";
 }


 ?>

<h1>Ejercicio 2</h1>
<?php
$datos = ["Pedro", "Ana", 34, 1];
print_r($datos);
 ?>

<h1>Ejercicio 3</h1>
<?php
$datos1 = ["Nombre"=>"Pedro", "Apellido"=>"Torres", "Dirección"=>"Av. Mayor 3703", "Teléfono"=>"1122334455"];
// print "<pre>\n = salto de línea
print "<pre>\n"; 
print_r($datos1);
print "<pre>\n";
 ?>

<h1>Ejercicio 4</h1>
<?php
$ciudades=["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
foreach ($ciudades as $indice => $valor) {
    print ("La ciudad con el índice ").($indice).(" tiene el nombre de ").($valor);
    print "<pre>\n"; 
 }

 ?>
<h1>Ejercicio 5</h1>
<?php
$ciudades=["MD"=>"Madrid", "BCL"=>"Barcelona", "LD"=>"Londres", "NY"=>"New York", "LA"=>"Los Angeles", "CCG"=>"Chicago"];
foreach ($ciudades as $indice => $valor) {
    print ("El índice de ").($valor).(" es ").($indice);
    print "<pre>\n"; 
 }

 ?>
</body>
</html>