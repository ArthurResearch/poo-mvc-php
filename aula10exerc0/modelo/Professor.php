<?php

require_once("Pessoa.php");

class Professor extends Pessoa {
    private float $salario;

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}