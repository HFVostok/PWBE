<?php
// Lê os três valores
$numero= $_POST['$numero']; // Substitua pelo primeiro valor

// Array com os nomes dos meses
$meses = array(
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
);

// Verifica se o número está dentro do intervalo e imprime o mês correspondente
if ($numero >= 1 && $numero <= 12) {
    echo "O número $numero corresponde ao mês de " . $meses[$numero] . ".";
} else {
    echo "Não existe mês com o número $numero.";
}
?>