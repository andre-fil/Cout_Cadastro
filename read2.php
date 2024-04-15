<?php
namespace Coutinho;
require_once 'envio.php';
require_once 'conexao.php';
require_once 'Pessoa.php';

use Coutinho\Pessoa;
    
#obtendo dados do formulário
$nome = obterPesquisaDados();
function buscarPorNome($pdo, $nome) {
    $query = "SELECT * FROM Pessoa WHERE nome = :nome";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->execute();
    $resultado = $statement->fetch();

    if ($resultado) {
        return new Pessoa($resultado['nome'], $resultado['email'], $resultado['senha'],$resultado['cpf'], $resultado['status']);
    } else {
        return null;
    }
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

//$pessoas = buscarTodos($pdo);
//foreach($pessoas as $pessoa){
    //echo $pessoa->nome(). "<br>";
//}
