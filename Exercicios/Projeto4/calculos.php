<?php

$numero1 = $_POST['numero1']; // Substitua pelo primeiro número



if ($numero1 >= 0) {
    $fatorial = 1;
    
    // Loop para calcular o fatorial
    for ($i = 1; $i <= $numero1; $i++) {
        $fatorial *= $i;
    }
    
    echo "O fatorial de $numero1 é: " . $fatorial;
} else {
    echo "O fatorial de números negativos não é definido.";
}

?>