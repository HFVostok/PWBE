<?php

$numero1 = $_POST['numero1']; // Substitua pelo primeiro número
$numero2 = $_POST['numero2']; // Substitua pelo segundo número


if ($numero2 != 0) {
    $resultado = 0;

    // Loop para subtrair $numero2 de $numero1 até que $numero1 seja menor que $numero2
    while ($numero1 >= $numero2) {
        $numero1 -= $numero2;
        $resultado++;
    }



    echo "O resultado da divisão é: " . $resultado;
} else {
    echo "Não é possível dividir por zero.";

}

$cocientR = $numero1;
echo "<br>";
echo "Cociente: $cocientR ";

?>