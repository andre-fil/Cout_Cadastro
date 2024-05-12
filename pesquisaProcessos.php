<?php
namespace Coutinho;
require_once 'enviaProcesso.php';
require_once 'conexao.php';
require_once 'Processo.php';

use Coutinho\Pessoa;
    

function buscarProcessos($pdo,$cpf) {
    $sqlVerificar = "SELECT COUNT(*) FROM Processo WHERE cpf = :cpf";
    $query_verificar = $pdo->prepare($sqlVerificar);
    $query_verificar->bindValue(':cpf', $cpf);
    $query_verificar->execute();
    $numLinhas = $query_verificar->fetchColumn();

    if($numLinhas > 0){
        $query = "SELECT * FROM Processo WHERE cpf = :cpf";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':cpf',$cpf);
        $statement->execute();
        $resultados = $statement->fetchall();
    
        $processos = [];
        foreach ($resultados as $resultado) {
            $processos[]= new Processo($resultado['cpf'],$resultado['protocolo'],$resultado['parceiro'],$resultado['assunto'],$resultado['dataAbertura'],$resultado['status']);
        }
    
        return $processos;
    } else{
        return "Não há processos";
    }


   
}

function buscarProcessoProtocolo($pdo,$protocolo) {
        $query = "SELECT * FROM Processo WHERE protocolo = :protocolo";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':protocolo',$protocolo);
        $statement->execute();
        $resultado = $statement->fetch();
     
    
        $processo = new Processo($resultado['cpf'],$resultado['protocolo'],$resultado['parceiro'],$resultado['assunto'],$resultado['dataAbertura'],$resultado['status']);
    
        return $processo;
    }

//$pessoa = buscarPorNome($pdo,$nome);
//echo "Nome: " .$pessoa->nome() . "  CPF:" . $pessoa->cpf();
