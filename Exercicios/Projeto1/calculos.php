<?php


$galao = 3.6;
$galaoMetro = 10.8;

function calculaLitro($metro)
{
    $LitroporMetro = 3;
    $litros = $metro / $LitroporMetro;
    $litrosCorr = $litros + ($litros * 0.1);
    $latas = $litrosCorr / 18;



    if ($latas % 18 != 0) {

    } else {
        $latas = 1;
    }

    $lataCheia = round($latas, 0);
    $preco = $lataCheia * 80;

    echo "Litro: $litrosCorr <br>";
    echo " Latas: $lataCheia <br>";
    echo "Preço: $preco<br>";
}


function calculaGalao($metro)
{
    $LitroporMetro = 3;
    $litrosG = $metro / $LitroporMetro;
    $litrosGalCorr = $litrosG + ($litrosG * 0.1);
    $galoes = $litrosGalCorr / 3.6;



    if ($galoes % 3.6 == 0) {
        $galoes = 1;
    } else {

    }

    $lataCheia = round($galoes, 0);
    $preco = $lataCheia * 25;

    echo "Litro: $litrosGalCorr <br>";
    echo "Galões: $lataCheia <br>";
    echo "Preço: $preco<br>";

}


function LatasEGaloes($metro)
{
    $litroMetro = 3;
    $litros = $metro / $litroMetro;
    $litoCorr = $litros + ($litros * 0.1);

    $quantidadeLata = $litoCorr / 18;

    if ($quantidadeLata % 18 != 0) {

    } else {
        $quantidadeLata = 1;
    }

    round($quantidadeLata, 0);

    $resto = $quantidadeLata % 18;

    //if($resto >= ) {}

    //else {}

    $quantidadeGalao = ($resto * 18) / 3.6;

    if ($quantidadeGalao % 3.6 == 0) {
        $quantidadeGalao = 1;
    } else {
    
    }

    round($quantidadeGalao, 0);

    $precoTotal = ($quantidadeLata * 80) + ($quantidadeGalao * 25);

    echo "Quantidade de Latas de 18L: " . round($quantidadeLata) . "<br>";
    echo "Quantidade de Galões de 3,6L: " . round($quantidadeGalao) . "<br>";
    echo "Preço Total: $precoTotal<br>";


}



$metro = $_POST['metro'];

echo calculaLitro($metro) . "<br>";
echo calculaGalao($metro) . "<br>";
echo LatasEGaloes($metro) . "<br>";


?>