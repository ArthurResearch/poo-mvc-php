<?php

require_once("modelo/Cachorro.php");
require_once("modelo/Gato.php");

$gato1 = new Gato();
$gato1->setNome("Punhetosclaudo");
$gato1->setRaca("Felino");
echo $gato1->getDados() . " - ";
echo $gato1->Miar() . "\n";

$gato2 = new Gato();
$gato2->setNome("Mingau");
$gato2->setRaca("Felino");
echo $gato1->getDados() . " - ";
echo $gato1->Miar() . "\n";

$cachorro1 = new Cachorro();
$cachorro1->setNome("Fernando");
$cachorro1->setRaca("Canino");
echo $cachorro1->getDados() . " - ";
echo $cachorro1->Latir() . "\n";

$cachorro2 = new Cachorro();
$cachorro2->setNome("IShowSpeed");
$cachorro2->setRaca("Canino");
echo $cachorro2->getDados() . " - ";
echo $cachorro2->Latir() . "\n";