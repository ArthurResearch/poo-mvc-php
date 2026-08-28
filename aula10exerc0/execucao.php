<?php

require_once("modelo/Aluno.php");
require_once("modelo/Professor.php");

$aluno = new Aluno();
$aluno->setNome("Juviscláudio");
$aluno->setRg(256435624);
$aluno->setIdade(16);
$aluno->setMatricula(256435624);
echo $aluno . "\n";