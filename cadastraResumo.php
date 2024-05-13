<?php
namespace Coutinho;
#Importando arquivos necessários
require_once 'conexao.php';
require_once 'read2.php'; 
require_once 'criaResumo.php';
require_once 'enviaResumo.php';
require_once 'pesquisaProcessos.php';
require_once "Processo.php";


use Coutinho\Pessoa;
use Coutinho\Processo;


$dados = enviaResumo();


if ($dados !== null) {
    #transformando os dados em variáveis

    
    list($protocolo,$resumo) = $dados;
    $processo = buscarProcessoProtocolo($pdo,$protocolo);
   

    $processo->setDescricao($resumo);




        // Não existe uma pessoa com o mesmo e-mail, então se insere o novo registro
        $sqlInsert = "UPDATE Processo set descricao = :descricao where protocolo = :protocolo";
        $statement = $pdo->prepare($sqlInsert);
        $statement->bindValue(':descricao', $processo->descricao());
        $statement->bindValue(':protocolo', $processo->protocolo());


        if ($statement->execute()) {
            $_SESSION['mensagem'] = "Resumo Adicionado!.";
        } else {
            $_SESSION['mensagem'] = "Não foi possível incluir o processo.";
        }
    }





    ?>