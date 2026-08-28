<?php

require_once("Pessoa.php");

class Aluno extends Pessoa {
    private string $matricula;

    public function __toString() {
        $dados = "Nome: " . $this->nome;
        $dados .= " | RG: " . $this->rg;
        $dados .= " | Idade: " . $this->idade;
        $dados .= " | Matrícula: " . $this->matricula;

        return $dados;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }
}