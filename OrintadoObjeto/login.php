<?php

class Login{

private $usuario;
private $senha;

//Getters/ Setters

public function getUsuario(){
    return $this->usuario;
}

public function setUsuario($e){
    $this->usuario = $e;
}

public function getSenha($senha){
return $this->senha;
}

public function setSenha($e){
    $this->senha = $e;
}

public function Logar(){

    if($this->usuario== "userphp" and $this->senha== "1234"):
        echo"Login Com Sucesso!";
    else:
        echo "Dados Invalidos!";
        endif;
        
}
}

$logar = new Login();
//$logar->usuario = "userphp";
//$logar->senha = "1234";

$logar->setUsuario("usership");
$logar->setSenha("1234");

$logar->Logar();

echo"<br>";
echo $logar->getUsuario();
echo"<br>";
echo $logar->getSenha();

?>