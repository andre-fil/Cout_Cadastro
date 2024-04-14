<?php
namespace Coutinho;

function obterDados() {
    if (isset($_POST["acao"])){
    //echo "<script>alert('Formulário Foi enviado pelo método POST')</script>";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha= $_POST['senha'];
    $cpf= $_POST['cpf'];
    $status= $_POST['status'];

    return array($nome, $email, $senha,$cpf,$status);
    }
}
?>