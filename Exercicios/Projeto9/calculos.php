<?php

// Função para verificar se um número é perfeito
function isPerfeito($numero) {
    $somaFatores = 1;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $somaFatores += $i;
            if ($i != $numero / $i) {
                $somaFatores += $numero / $i;
            }
        }
    }
    return $somaFatores == $numero;
}

// Encontra e exibe todos os números perfeitos até 1000
for ($i = 2; $i <= 1000; $i++) {
    if (isPerfeito($i)) {
        echo "$i é um número perfeito.<br>";
    }
}
?>