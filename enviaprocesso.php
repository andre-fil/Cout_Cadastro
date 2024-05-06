<?php


function dadosProcesso() {
    if (isset($_POST["enviar_processo"])){
    //echo "<script>alert('Formulário Foi enviado pelo método POST')</script>";
    $cpf = $_POST['cpf'];
    $protocolo = $_POST['protocolo'];
    $parceiro = $_POST['parceiro'];
    $descricao= $_POST['descricao'];
    $dataAbertura = $_POST['dataAbertura'];

    return array($cpf,$protocolo,$parceiro,$descricao,$dataAbertura);
    }
}