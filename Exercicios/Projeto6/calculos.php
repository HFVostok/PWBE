<?php
// Lê os três valores
$valor1= $_POST['valor1']; // Substitua pelo primeiro valor
$valor2  = $_POST['valor2']; // Substitua pelo segundo valor
$valor3 = $_POST['valor3']; // Substitua pelo terceiro valor


// Verifica se os valores representam um triângulo
if (($valor1 < ($valor2 + $valor3)) && ($valor2 < ($valor1 + $valor3)) && ($valor3 < ($valor1 + $valor2))) {
    // Verifica se é equilátero (todos os lados iguais)
    if ($valor1 == $valor2 && $valor2 == $valor3) {
        echo "Os valores representam um triângulo equilátero.";
    }
    // Verifica se é isósceles (dois lados iguais)
    elseif ($valor1 == $valor2 || $valor1 == $valor3 || $valor2 == $valor3) {
        echo "Os valores representam um triângulo isósceles.";
    }
    // Se não for nem equilátero nem isósceles, é escaleno (todos os lados diferentes)
    else {
        echo "Os valores representam um triângulo escaleno.";
    }
} else {
    echo "Os valores NÃO representam um triângulo.";
}
?>