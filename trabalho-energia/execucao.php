<?php 

require_once ('model/Residencial.php');
require_once ('model/Comercial.php');
require_once ('model/Industrial.php');

do {
    print "\n ⋇⊶⊰⊱⊷⋇ CALCULADORA DE CONSUMO ENERGÉTICO! by: buchinho ⋇⊶⊰⊱⊷⋇ \n";
    print " 1 RESIDENCIAL \n";
    print " 2 COMERCIAL \n";
    print " 3 INDUSTRIAL \n";
    print " 0 SAIR\n";

    $escolha = readline("Qual tipo de estabelecimento você deseja calcular?" . "\n");

    switch ($escolha) {

        case 0:
            print "ATÉ A PRÓXIMA";
            break;

        case 1:
            print "ESTABELECIMENTO RESIDENCIAL SELECIONADO\n";

            $consumo = new Residencial;
            $consumo->setConsumo(readline("Qual a quantidade de KWh consumidos no mês de referência? "));
            break;
            
        case 2:
            print "ESTABELECIMENTO COMERCIAL SELECIONADO\n";
            $consumo = new Comercial;
            $consumo->setConsumo(readline("Qual a quantidade de KWh consumidos no mês de referência? "));
            break;

            case 3:
                print "ESTABELECIMENTO INDUSTRIAL SELECIONADO\n";
                $consumo = new Industrial;
                $consumo->setConsumo(readline("Qual a quantidade de KWh consumidos no mês de referência? "));
                break;

        default:
            print "ALTERNATIVA INVÁLIDA!!\n";
            break;
    }

    print "Consumo mensal: ". $consumo->getConsumo() . "KWh\n";
    print "Valor a pagar: R$". $consumo->getValorFatura() . "\n";

} while ($escolha != 0);

