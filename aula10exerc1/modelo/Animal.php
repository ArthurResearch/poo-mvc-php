<?php

class Animal {
    protected string $nome;
    protected string $raca;

    public function getDados() {
        $dados = "Nome do animal: " . $this->nome;
        $dados .= " | Raça do animal: " . $this->raca;

        return $dados;
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

    public function getRaca(): string
    {
        return $this->raca;
    }

    public function setRaca(string $raca): self
    {
        $this->raca = $raca;

        return $this;
    }
}