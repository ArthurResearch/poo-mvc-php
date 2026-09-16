<?php

require_once("Mago.php");

class Curandeiro extends Mago {
    private int $forcaCura;

    public function lancarPoder(){
        printf("O mago %s, do tipo Curandeiro, possui força de %d, e lançou poder %s com força total de %f", $this->nome, $this->forcaCura, $this->poder->getDescricao(), this->poder->getForcaTotal());
    }
}