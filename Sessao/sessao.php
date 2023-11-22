<?php
session_start(); // Precissa ser Chamadas antes que qualquer informação seja impressa na tela
// pois .poi são enviados no cabeçalho http

$_SESSION['nome'] = "Maria";

echo "<a href = 'sessao01.php'> Teste Sessão 01</a>";

?>