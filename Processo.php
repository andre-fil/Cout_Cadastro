<?php

namespace Coutinho;
require_once "Pessoa.php";
use Coutinho\Pessoa;
class Processo
{
    private Pessoa $pessoa;
    private string $cpf;
    private string $protocolo;

    private string $parceiro;

    private string $descricao;

  
    public function __construct(Pessoa $pessoa)
    {

        $this->pessoa = $pessoa;
        $this->cpf = $pessoa->cpf();
    }

  public function cpf() : string{
    return $this->cpf;
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
