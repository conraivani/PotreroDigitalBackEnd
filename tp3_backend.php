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
    for ($i=1; $i <= 100 ; $i++) { 
        print "<p>$i</p>\n";
    }
    ?> <br>

    <h1>Ejercicio 2</h1>
    <?php
    for ($i=100; $i <= 100, $i >= 1 ; $i--) { 
        print "<p>$i</p>\n";
    }
    ?> <br>

    <h1>Ejercicio 3</h1>
    <?php
    for ($i=2; $i <= 100 ; $i=$i+2) { 
        print "<p>$i</p>\n";
    }
    ?> <br>

    <h1>Ejercicio 4</h1>
    <?php
    for ($i=1; $i <= 100 ; $i=$i+2) { 
        print "<p>$i</p>\n";
    }
    ?> <br>

    <h1>Ejercicio 5</h1>
    <?php
    $suma = 0;
    for ($i=1; $i <= 20 ; $i++) { $suma = $suma + $i;
        print "<p>$suma</p>\n";
    }
    ?> <br>

    <h1>Ejercicio 6</h1>
    <?php
    $suma = 0;
    for ($i=2; $i <= 20 ; $i=$i+2) { $suma = $suma + $i;
        print "<p>$suma</p>\n";
    }
    ?> <br>

</body>
</html>