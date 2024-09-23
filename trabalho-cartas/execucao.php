<?php

class Cartas
{ //professor eu ja tava fazendo em dois arquivos mas ai li no pdf que era só um :'( fiquei triste
    private int $numero;
    private string $nome;

    private string $formato;

    public function __tostring()
    {
        return "Carta: " . $this->nome . " / Número: " .  $this->numero . "\n" . $this->formato . "\n\n";
    }

    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of formato
     */
    public function getFormato(): string
    {
        return $this->formato;
    }

    /**
     * Set the value of formato
     */
    public function setFormato(string $formato): self
    {
        $this->formato = $formato;

        return $this;
    }
}

$pontuacao = 10; //sistema de pontuacao

$cartas = array();

//inicio cartas
$carta1 =  new Cartas();
$carta1->setNome("Ás de Copas");
$carta1->setNumero(1);
$carta1->setFormato(
    "
.------.
|A_  _ |
|( \/ )|
| \  / |
|  \/ A|
`------'
"
);

$carta2 =  new Cartas();
$carta2->setNome("Dois de Copas");
$carta2->setNumero(2);
$carta2->setFormato("
.------.
|2    ♡|
|  ♡   |
|     ♡|
|    2 |
`------'
");

$carta3 =  new Cartas();
$carta3->setNome("Três de Ouros");
$carta3->setNumero(3);
$carta3->setFormato(
    "
.------.
|3    ♦|
|  ♦   |
|  ♦   |
|    3 |
`------'
"
);

$carta4 =  new Cartas();
$carta4->setNome("Quatro de Paus");
$carta4->setNumero(4);
$carta4->setFormato(
    "
.------.
|4    ♣|
| ♣    |
|    ♣ |
|    4 |
`------'
"
);

$carta5 =  new Cartas();
$carta5->setNome("Cinco de Espadas");
$carta5->setNumero(5);
$carta5->setFormato(
    "
.------.
|5    ♠|
|  ♠   |
| ♠ ♠ ♠|
|    5 |
`------'
"
);

$carta6 =  new Cartas();
$carta6->setNome("Seis de Copas");
$carta6->setNumero(6);
$carta6->setFormato(
    "
.------.
|6    ♡|
| ♡ ♡  |
| ♡ ♡  |
|    6 |
`------'
"
);

$carta7 =  new Cartas();
$carta7->setNome("Sete de Ouros");
$carta7->setNumero(7);
$carta7->setFormato(
    "
.------.
|7    ♦|
| ♦ ♦ ♦|
| ♦ ♦ ♦|
|    7 |
`------'
"
);

$carta8 =  new Cartas();
$carta8->setNome("Rei de Paus");
$carta8->setNumero(8);
$carta8->setFormato(
    "
.------.
|K  ♣  |
| ♣ ♣ ♣|
| ♣ ♣ ♣|
|  ♣  K|
`------'
"
);
//fim cartas


array_push($cartas, $carta1, $carta2, $carta3, $carta4, $carta5,  $carta6, $carta7, $carta8); //coloca todas as cartas no array

$randomizador = array_rand($cartas, 1); //randomiza o numero da carta
$cartaSorteada = $cartas[$randomizador]; //valor carta sorteada

function jogo($cartaSorteada,  $pontuacao, $cartas)
{ {
        do {
            print "\n ⋇⊶⊰⊱⊷⋇ ADIVINHE AS CARTAS! by: buchinho ⋇⊶⊰⊱⊷⋇ \n";
            print " 1 FÁCIL \n";
            print " 2 NORMAL\n";
            print " 3 DIFÍCIL\n";
            print " 0 SAIR\n";

            $escolha = readline("Em qual dificuldade deseja jogar? " . "\n");

            foreach ($cartas as $c) { //imprime as cartas
                print $c;
            }

            switch ($escolha) {

                case 0:
                    print "ATÉ A PRÓXIMA";
                    break;

                case 1:
                    print "DIFICULDADE FÁCIL SELECIONADA\n";

                    while (true) { //loop para adivinhacao
                        $pergunta = readline("Qual seu palpite  para o número da carta sorteada?: \n");

                        if ($pergunta ==  $cartaSorteada->getNumero()) {
                            print "Você acertou! Parabéns!\n\n";
                            break;
                        } else {
                            print "Você errou! Tente novamente!\n\n";
                            $pontuacao = $pontuacao - 1;
                            sleep(1);
                        }
                    }

                    print "Pontuacao final: $pontuacao";
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

                case 55221313:
                    print "DIFICULDADE DE TESTE SELECIONADA\n";
                    $pontuacao = 9999999999999;

                    while (true) { //loop para adivinhacao
                        $pergunta = readline("Qual seu palpite  para o número da carta sorteada?: \n");

                        if ($pergunta ==  $cartaSorteada->getNumero()) {
                            print "Você acertou! Parabéns!\n\n";
                            break;
                        } else {
                            print "Você errou! Tente novamente!\n\n";
                            $pontuacao = $pontuacao - 10092007;
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
    }
}

jogo($cartaSorteada,  $pontuacao, $cartas);
