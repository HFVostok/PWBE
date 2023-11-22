<?php

$numero1 = $_POST['numero1']; // Substitua pelo primeiro número
$numero2 = $_POST['numero2']; // Substitua pelo segundo número

$resultado = 0;

// Loop para somar $numero1 $numero2 vezes
for ($i = 1; $i <= $numero2; $i++) {
    $resultado += $numero1;
}



echo "O resultado da multiplicação é: " . $resultado;


?>