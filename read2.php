<?php
namespace Coutinho;
require_once 'envio.php';
require_once 'conexao.php';
require_once 'Pessoa.php';

use Coutinho\Pessoa;
    
#obtendo dados do formulário
$nome = obterPesquisaDados();
function buscarPorNome($pdo, $nome) {
    $query = "SELECT * FROM Pessoa WHERE nome LIKE :nome";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':nome', '%'.$nome.'%');
    $statement->execute();
    $resultados = $statement->fetchall();

    $pessoas = [];
    foreach ($resultados as $resultado) {
        $pessoa = new Pessoa($resultado['nome'], $resultado['email'], $resultado['senha'],$resultado['cpf'], $resultado['status']);
        $pessoas[] = $pessoa;
    }

    return $pessoas;
}

//$pessoa = buscarPorNome($pdo,$nome);
//echo "Nome: " .$pessoa->nome() . "  CPF:" . $pessoa->cpf();


function buscarTodos($pdo) {
    $query = "SELECT * FROM Pessoa";
    $statement = $pdo->query($query);
    $resultados = $statement->fetchAll();

    $pessoas = [];
    foreach ($resultados as $resultado) {
        $pessoa = new Pessoa($resultado['nome'], $resultado['email'], $resultado['senha'],$resultado['cpf'], $resultado['status']);
        $pessoas[] = $pessoa;
    }

    return $pessoas;

}



