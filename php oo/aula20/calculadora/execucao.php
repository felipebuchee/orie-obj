<?php

require_once('model/Soma.php');
require_once('model/Subtracao.php');
require_once('model/Multiplicacao.php');
require_once('model/Divisao.php');
require_once('model/Resto.php');

do {
    print "\n ⋇⊶⊰⊱⊷⋇ CALCULADORA BUCHIANA!!! ⋇⊶⊰⊱⊷⋇ \n";
    print " 1 SOMAR \n";
    print " 2 SUBTRAIR \n";
    print " 3 MULTIPLICAR\n";
    print " 4 DIVIDIR\n";
    print " 5 RESTAR\n";
    print " 0 SAIR\n";

    $escolha = (int) readline("Qual serviço deseja utilizar? " . "\n");

    switch ($escolha) {

        case 0:
            print "ATÉ A PRÓXIMA";
            break;

        case 1:
            print "SOMANDO OS VALORES!\n";
            $soma = new Soma();
            $soma->setNumA(readline("Qual o primeiro valor? " . "\n"));
            $soma->setNumB(readline("Qual o segundo valor? " . "\n"));

            print "Resultado: " . $soma->calcular() . "\n";
            break;

        case 2:
            print "SUBTRAINDO OS VALORES!\n";
            $subtracao = new Subtracao();
            $subtracao->setNumA(readline("Qual o primeiro valor? " . "\n"));
            $subtracao->setNumB(readline("Qual o segundo valor? " . "\n"));

            print "Resultado: " . $subtracao->calcular() . "\n";

            break;

        case 3:
            print "MULTIPLICANDO OS VALORES!\n";
            $multiplicacao = new Multiplicacao();
            $multiplicacao->setNumA(readline("Qual o primeiro valor? " . "\n"));
            $multiplicacao->setNumB(readline("Qual o segundo valor? " . "\n"));

            print "Resultado: " . $multiplicacao->calcular() . "\n";

            break;

        case 4:
            print "DIVIDINDO OS VALORES!\n";
            $divisao = new Divisao();
            $divisao->setNumA(readline("Qual o primeiro valor? " . "\n"));
            $divisao->setNumB(readline("Qual o segundo valor? " . "\n"));

            print "Resultado: " . $divisao->calcular() . "\n";
            break;

            case 5:
                print "RESTANDO OS VALORES!\n";
                $resto = new Resto();
                $resto->setNumA(readline("Qual o primeiro valor? " . "\n"));
                $resto->setNumB(readline("Qual o segundo valor? " . "\n"));
    
                print "Resultado: " . $resto->calcular() . "\n";
                break;

        default:
            print "ALTERNATIVA INVÁLIDA!!\n";
            break;
    }
} while ($escolha != 0);
