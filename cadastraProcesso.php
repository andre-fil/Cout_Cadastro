<?php
namespace Coutinho;
#Importando arquivos necessários
require_once 'conexao.php';
require_once 'read2.php'; 
require_once 'criaProcessos.php';
require_once 'enviaProcesso.php';
require_once "Processo.php";

use Coutinho\Pessoa;
use Coutinho\Processo;


$dadosProcesso = dadosProcesso();


if ($dadosProcesso !== null) {
    #transformando os dados em variáveis

    
    list($cpf, $protocolo, $parceiro,$descricao,$dataAbertura) = $dadosProcesso;

    $processo = new Processo($cpf,$protocolo,$parceiro,$descricao,$dataAbertura);

   // Verificar se já existe um processo com o mesmo protocolo
    $sqlVerificar = "SELECT COUNT(*) FROM Processo WHERE protocolo = :protocolo";
    $statementVerificar = $pdo->prepare($sqlVerificar);
    $statementVerificar->bindValue(':protocolo', $processo->protocolo());
    $statementVerificar->execute();
    $numLinhas = $statementVerificar->fetchColumn();

    if ($numLinhas > 0) {
        // Já existe uma pessoa com o mesmo nome ou CPF
        $_SESSION['mensagem'] = "Já existe um Processo com esse número de protocolo.";
    } else {
        // Não existe uma pessoa com o mesmo e-mail, então se insere o novo registro
        $sqlInsert = "INSERT INTO Processo (cpf, protocolo, parceiro,descricao,dataAbertura) VALUES (:cpf, :protocolo, :parceiro,:descricao,:dataAbertura)";
        $statement = $pdo->prepare($sqlInsert);
        $statement->bindValue(':cpf', $processo->cpf());
        $statement->bindValue(':protocolo', $processo->protocolo());
        $statement->bindValue(':parceiro', $processo->parceiro());
        $statement->bindValue(':descricao', $processo->descricao());
        $statement->bindValue(':dataAbertura', $processo->dataAbertura());


        if ($statement->execute()) {
            $_SESSION['mensagem'] = "Processo incluído!.";
        } else {
            $_SESSION['mensagem'] = "Não foi possível incluir o processo.";
        }
    }

}



    ?>