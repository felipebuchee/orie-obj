<?php 

require_once("modelo/Carro.php");
require_once("modelo/Fabricante.php");

do {
    print "\n ⋇⊶⊰⊱⊷⋇ CADASTRAMENTO DE CARROS ⋇⊶⊰⊱⊷⋇ \n";
    print " 1 CADASTRAR \n";
    print " 2 EXCLUIR \n";
    print " 3 LISTAR \n";
    print " 0 SAIR\n";

    $escolha = readline("O que você deseja fazer?" . "\n");

    switch ($escolha) {

        case 0:
            print "ATÉ A PRÓXIMA";
            break;

        case 1:
            print("Cadastrando carro agora!");
            
            break;

        case 2:
            print "DIFICULDADE NORMAL SELECIONADA\n";

            while (true) { //loop para adivinhacao
                $pergunta = readline("Qual seu palpite  para o número da carta sorteada?: \n");

                if ($pergunta ==  $cartaSorteada->getNumero()) {
                    print "Você acertou! Parabéns!\n\n";
                    break;
                } else {
                    print "Você errou! Tente novamente!\n\n";
                    $pontuacao = $pontuacao - 2;
                    sleep(1);
                }
            }

            print "Pontuacao final: $pontuacao";
            break;

        case 3:
            print "DIFICULDADE DIFÍCIL SELECIONADA\n";

            while (true) { //loop para adivinhacao
                $pergunta = readline("Qual seu palpite  para o número da carta sorteada?: \n");

                if ($pergunta ==  $cartaSorteada->getNumero()) {
                    print "Você acertou! Parabéns!\n\n";
                    break;
                } else {
                    print "Você errou! Tente novamente!\n\n";
                    $pontuacao = $pontuacao - 5;
                    sleep(1);
                }
            }

            print "Pontuacao final: $pontuacao";
            break;

        default:
            print "ALTERNATIVA INVÁLIDA!!\n";
            break;
    }
} while ($escolha != 0);