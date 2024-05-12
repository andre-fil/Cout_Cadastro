<?php

namespace Coutinho;
class LinhaTempo {

    private string $protocolo;
    private string $data;
    private string $evento;
    private string $descricao;

    public function __construct(string $protocolo, string $data, string $evento, string $descricao) {
        $this->protocolo = $protocolo;
        $this->data = $data;
        $this->evento = $evento;
        $this->descricao = $descricao;
    }

    public function protocolo(): string {
        return $this->protocolo;
    }

    public function data(): string {
        return $this->data;
    }

    public function evento(): string {
        return $this->evento;
    }

    public function descricao(): string {
        return $this->descricao;
    }
}
