<?php

if (isset($_POST['enviar-formulario'])):
    $formatos = array("png","jpeg","jpg","gif","pdf");
    $qtdArquivos = count($_FILES['arquivo']['name']);
    $cont = 0;

while ($cont < $qtdArquivos):

   $extensao = pathinfo($_FILES['arquivo']['name'][$cont], PATHINFO_EXTENSION);

   if(in_array($extensao,$formatos)):
    $pasta = "arquivos/";
    $temporario = $_FILES['arquivo']['tmp_name'][$cont];
    $novoNome = uniqid() . ".$extensao";

    if(move_uploaded_file($temporario, $pasta . $novoNome)):
echo "Upload feito com sucesso. <br>";

    else:
        "Erro, não foi possivel fazer o Upload.<br>";
    endif;
    else :
        echo"Formato invalido: " . $extensao . "<br>";
    endif;
    
$cont++;
   

endwhile;


endif;


?>