<?php
namespace Coutinho;
require_once 'Pessoa.php';
require_once 'envio.php';
require_once 'conexao.php';

use Coutinho\Pessoa;

#obtendo dados do formuçário
$dadosFormulario = obterDados();


if ($dadosFormulario !== null) {
    #transformando os dados em variáveis

    list($nome, $email, $senha,$cpf,$status) = $dadosFormulario;
    #criando uma classe com os parâmetros

    $pessoa = new Pessoa($nome, $email, $senha,$cpf,$status);

   // Verificar se já existe uma pessoa com o mesmo CPF ou nome
    $sqlVerificar = "SELECT COUNT(*) FROM Pessoa WHERE cpf = :cpf or nome = :nome";
    $statementVerificar = $pdo->prepare($sqlVerificar);
    $statementVerificar->bindValue(':cpf', $pessoa->cpf());
    $statementVerificar->bindValue(':nome', $pessoa->nome());
    $statementVerificar->execute();
    $numLinhas = $statementVerificar->fetchColumn();

    if ($numLinhas > 0) {
        // Já existe uma pessoa com o mesmo nome ou CPF
        $_SESSION['mensagem'] = "Já existe uma pessoa com o mesmo CPF ou com esse nome.";
    } else {
        // Não existe uma pessoa com o mesmo e-mail, então se insere o novo registro
        $sqlInsert = "INSERT INTO Pessoa (nome, email, senha, cpf, status) VALUES (:nome, :email, :senha,:cpf,:status)";
        $statement = $pdo->prepare($sqlInsert);
        $statement->bindValue(':nome', $pessoa->nome());
        $statement->bindValue(':email', $pessoa->email());
        $statement->bindValue(':senha', $pessoa->senha());
        $statement->bindValue(':cpf', $pessoa->cpf());
        $statement->bindValue(':status', $pessoa->status());

        if ($statement->execute()) {
            $_SESSION['mensagem'] = "Aluno incluído com sucesso.";
        } else {
            $_SESSION['mensagem'] = "Não foi possível incluir o aluno.";
        }
    }

}



    ?>