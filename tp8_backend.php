<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <h2>a.</h2>
<table>
<tr>
    <th>ID</th>
    <th>PRENDA</th>
    <th>MARCA</th>
    <th>TALLE</th>
    <th>PRECIO</th>
</tr>

 <?php
// CONEXION
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda");

// PREPARAR LA ORDEN
$consulta="SELECT*FROM ropa";

// EJECUTAR LA ORDEN Y OBTENER DATOS
$datos=mysqli_query($conexion, $consulta);

// IMPRIMIR RESULTADOS 
while ($reg=mysqli_fetch_array($datos)) { ?>
<tr>
    <td> <?php echo $reg["id"]; ?> </td>
    <td> <?php echo $reg["prenda"]; ?> </td>
    <td> <?php echo $reg["marca"]; ?> </td>
    <td> <?php echo $reg["talle"]; ?> </td>
    <td> <?php echo $reg["precio"]; ?> </td>
</tr>
<?php } ?>
</table>

<h2>b.</h2>
<table>
<tr>
    <th>ID</th>
    <th>PRENDA</th>
    <th>MARCA</th>
    <th>TALLE</th>
    <th>PRECIO</th>
</tr>

 <?php
// CONEXION
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda");

// PREPARAR LA ORDEN
$consulta="SELECT*FROM ropa WHERE prenda = 'buzo'";

// EJECUTAR LA ORDEN Y OBTENER DATOS
$datos=mysqli_query($conexion, $consulta);

// IMPRIMIR RESULTADOS 
while ($reg=mysqli_fetch_array($datos)) { ?>
<tr>
    <td> <?php echo $reg["id"]; ?> </td>
    <td> <?php echo $reg["prenda"]; ?> </td>
    <td> <?php echo $reg["marca"]; ?> </td>
    <td> <?php echo $reg["talle"]; ?> </td>
    <td> <?php echo $reg["precio"]; ?> </td>
</tr>
<?php } ?>
</table>

<h2>c.</h2>
<table>
<tr>
    <th>ID</th>
    <th>PRENDA</th>
    <th>MARCA</th>
    <th>TALLE</th>
    <th>PRECIO</th>
</tr>

 <?php
// CONEXION
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda");

// PREPARAR LA ORDEN
$consulta="SELECT*FROM ropa WHERE marca = 'nike'";

// EJECUTAR LA ORDEN Y OBTENER DATOS
$datos=mysqli_query($conexion, $consulta);

// IMPRIMIR RESULTADOS 
while ($reg=mysqli_fetch_array($datos)) { ?>
<tr>
    <td> <?php echo $reg["id"]; ?> </td>
    <td> <?php echo $reg["prenda"]; ?> </td>
    <td> <?php echo $reg["marca"]; ?> </td>
    <td> <?php echo $reg["talle"]; ?> </td>
    <td> <?php echo $reg["precio"]; ?> </td>
</tr>
<?php } ?>
</table>

<h2>d.</h2>
<table>
<tr>
    <th>ID</th>
    <th>PRENDA</th>
    <th>MARCA</th>
    <th>TALLE</th>
    <th>PRECIO</th>
</tr>

 <?php
// CONEXION
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda");

// PREPARAR LA ORDEN
$consulta="SELECT*FROM ropa WHERE precio > 500";

// EJECUTAR LA ORDEN Y OBTENER DATOS
$datos=mysqli_query($conexion, $consulta);

// IMPRIMIR RESULTADOS 
while ($reg=mysqli_fetch_array($datos)) { ?>
<tr>
    <td> <?php echo $reg['id']; ?> </td>
    <td> <?php echo $reg['prenda']; ?> </td>
    <td> <?php echo $reg['marca']; ?> </td>
    <td> <?php echo $reg['talle']; ?> </td>
    <td> <?php echo $reg['precio']; ?> </td>
</tr>
<?php } ?>
</table>
</body>


