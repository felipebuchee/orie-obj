<?php

class Pessoas {
    public $nome;
    public $endereco;
    public $uf;
    public $altura;

    function falarOla(){
        print "Olá mundo, sou " . $this->nome . "!!\n";
    }

    function falarEnd(){
        print "Moro em " . $this->endereco . "/" . $this->uf . "!!\n";
    }

    function falarAlt(){
        print "Tenho " . $this->altura . " metros!" ."!!\n";
    }
}

$peoples = new Pessoas();

$peoples->nome = readline("Qual seu nome?\n");
$peoples->endereco = readline("Qual seu endereço?\n");
$peoples->uf = readline("Qual a unidade federativa?\n");
$peoples->altura = readline("Qual sua altura?\n");

$peoples->falarOla();
$peoples->falarEnd();
$peoples->falarAlt();