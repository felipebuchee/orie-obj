<?php

class Monitor {
    //atributos

    public $cor;
    public $resolucao;
    public $marca;

    //metodos

    function ligar(){
        print "Computador Ligado!\n";
    }

    function desligar(){
        print "Computador Desligado!\n";
    }

    function imagem(){
        print "Computador mostrando Imagem!\n";
    }
}

//Programa Principal

$monitor1 = new Monitor();
$monitor1 ->cor = "Preto";
$monitor1 ->resolucao = "1920x1080";
$monitor1 ->marca = "Acer";
$monitor1 ->ligar();
$monitor1 ->desligar();
$monitor1 ->imagem();

$monitor2 = new Monitor();
$monitor1 ->cor = "Cinza";
$monitor1 ->resolucao = "1280x720";
$monitor1 ->marca = "AOC";
$monitor1 ->ligar();
$monitor1 ->desligar();
$monitor1 ->imagem();