<?php
namespace Coutinho;
class Pessoa
{
    private string $nome;
    private string $email;

    private string $senha;

    private string $cpf;

    private string $status;

  
    public function __construct(string $nome, string $email,string $senha, string $cpf, string $status)
    {

        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->cpf = $cpf;
        $this->status = $status;
    }

    public function status(): ?string
    {
        return $this->status;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function email(): string
    {
        return $this->email;
    }


    public function cpf(): string
    {
        return $this->cpf;
    }

    public function senha(): string
    {
        return $this->senha;
    }



}
