<?php

require_once("modelo/PessoaFisica.php");
require_once("modelo/PessoaJuridica.php");

$opcao = 0;
$pessoas = array();

do {
    echo "1. Cadastrar pessoa física\n";
    echo "2. Cadastrar pessoa jurídica\n";
    echo "3. Listar\n";
    echo "4. Excluir\n";
    echo "0. Sair\n";
    $opcao = readline("Informe a opção: ");

    switch ($opcao) {
        case 1:
            $pf = new PessoaFisica();
            $pf->setNome(readline("Nome de cartório: "));
            $pf->setIdade(readline("Idade da pessoa: "));
            $pf->setCpf(readline("CPF da pessoa: "));
            array_push($pessoas, $pf);
            break;
        case 2:
            $pj = new PessoaJuridica();
            $pj->setNome(readline("Nome de cartório: "));
            $pj->setNomeFantasia(readline("Nome fantasia da pessoa: "));
            $pj->setCnpj(readline("CNPJ da pessoa: "));
            array_push($pessoas, $pj);
            break;
        case 3:
            foreach ($pessoas as $p){
                if ($p instanceof PessoaFisica) {
                    echo "Física:\n";
                    echo $p . "\n";
                } else {
                    echo "Jurídica:\n";
                    echo $p . "\n";
                }
            }
            break;
        case 4:
            $idx = readline("Escolha a pessoa que você excluir: ");
            if ($idx > 0 && $idx <= count($pessoas)){
                array_splice($pessoas, $idx-1, 1);
            } else {
                echo "Índice inválido";
            }
        case 0:
            echo "Saindo do programa";
            break;
        default:
            echo "Opção inválida";
    }
} while ($opcao != 0);