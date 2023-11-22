<?php
if (isset($_POST["NumeroIns"])) {
    $numero = $_POST["NumeroIns"];
    
    if (is_numeric($numero)) {
        // Resto do código aqui
    } else {
        echo "Entrada inválida. Por favor, insira um número válido.";
    }
} else {
    echo "Número não foi fornecido.";
}

?>
