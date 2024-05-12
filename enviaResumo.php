<?php
namespace Coutinho;

function enviaResumo() {
    if (isset($_POST["enviar_resumo"])){
        $protocolo = $_POST['protocolo'];
        $resumo = $_POST['resumo'];

    return array($protocolo,$resumo);
    }       
}