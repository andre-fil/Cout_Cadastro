<?php
namespace Coutinho;
require_once 'Pessoa.php';
require_once 'envioUpdate.php';
require_once 'conexao.php';


use Coutinho\Pessoa;

#obtendo dados do formuçário
$dadosFormulario = obterDadosUpdate();


if ($dadosFormulario !== null) {
    #transformando os dados em variáveis

    list($nome, $email, $senha,$cpf,$status) = $dadosFormulario;
    #criando uma classe com os parâmetros

    $pessoa = new Pessoa($nome, $email, $senha,$cpf,$status);
    $sqlInsert = "UPDATE Pessoa set nome = :nome, email = :email, senha = :senha, status = :status where cpf = :cpf";
        $statement = $pdo->prepare($sqlInsert);
        $statement->bindValue(':nome', $pessoa->nome());
        $statement->bindValue(':email', $pessoa->email());
        $statement->bindValue(':senha', $pessoa->senha());
        $statement->bindValue(':cpf', $pessoa->cpf());
        $statement->bindValue(':status', $pessoa->status());

        if ($statement->execute()) {
            $_SESSION['mensagem'] = "Cadastro Atualizado com sucesso!";
        } else {
            $_SESSION['mensagem'] = "Não foi possível realizar a atualização!";
        }
    }

    ?>