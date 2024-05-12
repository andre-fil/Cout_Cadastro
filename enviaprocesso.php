<?php
namespace Coutinho;

function dadosProcesso() {
    if (isset($_POST["enviar_processo"])){
    //echo "<script>alert('Formulário Foi enviado pelo método POST')</script>";
    $cpf = $_POST['cpf'];
    $protocolo = $_POST['protocolo'];
    $parceiro = $_POST['parceiro'];
    $assunto= $_POST['assunto'];
    $dataAbertura = $_POST['dataAbertura'];
    $status = $_POST['status'];

    return array($cpf,$protocolo,$parceiro,$assunto,$dataAbertura,$status);
    }
}