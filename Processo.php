<?php

namespace Coutinho;

class Processo
{
    private string $cpf;
    private string $protocolo;

    private string $parceiro;

    private string $descricao;
    private string $assunto;

    private string $dataAbertura; 

    private string $status;




  
    public function __construct(string $cpf, string $protocolo, string $parceiro,string $assunto, String $dataAbertura, string $status) {
        $this->cpf = $cpf;
        $this->protocolo = $protocolo;
        $this->parceiro = $parceiro;
        $this->assunto = $assunto;
        $this->dataAbertura = $dataAbertura;
        $this->status = $status;
        
    }

  public function cpf() : string{
    return $this->cpf;
  }

    public function protocolo() : string {
        return $this->protocolo;
    }

     public function parceiro() : string {
        return $this->parceiro;
    }

    public function assunto() : string{
        return $this->assunto;
      }

  
    public function descricao() : string {
            return $this->descricao;
        
    }

    public function dataAbertura() : string {
        return $this->dataAbertura;
    }

    public function status() : string{
        return $this->status;
      }


  public function setProtocolo(string $protocolo): void
  {
      $this->protocolo = $protocolo;
  }


  public function setParceiro(string $parceiro): void
  {
      $this->parceiro = $parceiro;
  }


  public function setDescricao(string $descricao): void
  {
      $this->descricao = $descricao;
  }

}
