<?php 

require_once('model/Espaco.php');
require_once('model/Hotel.php');
require_once('model/Ponto.php');
require_once('model/Restaurante.php');

do {
    print "\n ⋇⊶⊰⊱⊷⋇ CADASTRAR PONTOS! by: buchinho ⋇⊶⊰⊱⊷⋇ \n";
    print " 1 CADASTRAR ESPAÇO \n";
    print " 2 EXCLUIR ESPAÇO\n";
    print " 3 LISTAR ESPAÇOS\n";
    print " 0 SAIR\n";

    $escolha = readline("Que tipo de estabelecimento deseja cadastrar?" . "\n");

    switch ($escolha) {

        case 0:
            print "ATÉ A PRÓXIMA";
            break;

        case 1:
            print "CADASTRANDI UM ESPAÇO\n";

                $pergunta = readline("Qual tipo de estabelecimento você deseja cadastrar?: \n");

                if ($pergunta == "Hotel") {
                    $pergunta = new Hotel();
                    
                } 
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

            break;

        default:
            print "ALTERNATIVA INVÁLIDA!!\n";
            break;
    }
} while ($escolha != 0);