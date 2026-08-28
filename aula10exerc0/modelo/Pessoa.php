<?php

class Pessoa {
    protected string $nome;
    protected int $rg;
    protected int $idade;

    public function __construct($nome="", $rg=0, $idade=0)
    {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->idade = $idade;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getRg(): int
    {
        return $this->rg;
    }

    public function setRg(int $rg): self
    {
        $this->rg = $rg;

        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}