

<?php
// PHP Orientado a Objeto
// define a Classe Pessoas
class Pessoas{

// Define as Caracteristicas
    public $nome;
    public $idade;

// Define Açõe/Metodos
    public function Falar(){
        echo $this->nome . " de " . $this->idade .  "anos, está falando...";
    }
}

// Cria Objeto Tipo Pessoa Ou Seja Instanciando o Objeto
$p = new Pessoas();
$p->nome = "João";
$p->idade = "15";

//var_dump($p);
$p->Falar();
echo "<br> Nome: ". $p->nome;
echo "<br> Idade: ". $p->idade;
?>