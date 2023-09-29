<?php


$galao = 3.6;
$galaoMetro = 10.8;

function calculoLata($metro,$LitroporMetro){
    $LitroporMetro = 0.33;
    $litros = $metro * $LitroporMetro;

}

$metro = $_POST['metro'];

echo calculoLata($metro,$LitroporMetro);



?>