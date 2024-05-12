<?php
namespace Coutinho;

function obterDados() {
    if (isset($_POST["acao"])){
    //echo "<script>alert('Formulário Foi enviado pelo método POST')</script>";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha= $_POST['senha'];
    $cpf= $_POST['cpf'];
    $categoria= $_POST['categoria'];

    return array($nome, $email, $senha,$cpf,$categoria);
    }
}



function obterPesquisaDados(){
    if (isset($_POST["buscar_por_nome"])){
        $nome = $_POST['nome'];
    
        return $nome;
}


function obterCategoria(){
    if (isset($_POST["buscar_por_categoria"])){
        $categoria = $_POST['categoria'];
    
        return $categoria;
}
}
}


?>