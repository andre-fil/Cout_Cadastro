<?php
namespace Coutinho;
require_once 'envio.php';
require_once 'conexao.php';
    
#obtendo dados do formulário
$nome = obterPesquisaDados();

if ($nome !== null) {
    $queryConsulta = "SELECT * FROM Pessoa WHERE nome LIKE :nome";
    $statmentquery = $pdo->prepare($queryConsulta);
    $statmentquery->bindValue(':nome', '%' . $nome . '%'); 
    $statmentquery->execute();

    $resultados = $statmentquery->fetchAll(); // Recupera os resultados da consulta, e deve vir após o execute;

    if (!empty($resultados)) {
        foreach ($resultados as $resultado) {
            echo "Nome: " . $resultado['nome'] . "<br>";
            echo "Email: " . $resultado['email'] . "<br>";
        }
    } else {
        echo "Nenhum resultado encontrado para o nome '$nome'.";
    }
}
?>
