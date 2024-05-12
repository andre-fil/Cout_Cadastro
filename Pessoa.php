<?php
namespace Coutinho;
class Pessoa
{
    private string $nome;
    private string $email;

    private string $senha;

    private string $cpf;

    private string $categoria;

  
    public function __construct(string $nome, string $email,string $senha, string $cpf, string $categoria)
    {

        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->cpf = $cpf;
        $this->categoria = $categoria;
    }

    public function categoria(): string
    {
        return $this->categoria;
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
