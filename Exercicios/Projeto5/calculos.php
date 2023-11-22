<?php

$quilometragem = $_POST['quilometragem']; // Substitua pela quilometragem percorrida
$consumo = $_POST['consumo']; // Substitua pelo consumo em litros
$precoLitro = $_POST['precoLitro']; // Substitua pelo preço do litro de combustível


if ($consumo > 0) {
    $consumoMedio = $quilometragem / $consumo;
    $custoPorKilometro = $precoLitro / $consumoMedio;

    echo "O consumo médio é de: " . $consumoMedio . " km/l<br>";
    echo "O custo por quilômetro é de: R$" . $custoPorKilometro . " por km";
} else {
    echo "O consumo deve ser maior que zero.";
}



?>