<?php

// Função para verificar se um número é primo
function isPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Encontra e exibe todos os números primos até 1000
for ($i = 2; $i <= 1000; $i++) {
    if (isPrimo($i)) {
        echo "$i é primo.<br>";
    }
}

?>