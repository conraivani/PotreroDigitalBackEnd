<?php
$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];


$ckusuario = "admin";
$ckpass = "1234";

if ($usuario==$ckusuario & $contrasenia==$ckpass) {
    header("location: https://www.potrerodigital.org/");

} else {
    echo "Incorrecto";
    header("location:https://google.com/error404");
}
?>
