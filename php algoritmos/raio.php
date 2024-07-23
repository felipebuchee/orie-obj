<?php

questao();

function questao(){
$raio = readline("Digite o raio da sua circunfêrencia em centímetros:\n");
 $pergunta = readline("O que você quer calcular? área ou circunferência?\n");

if ($pergunta == "área") {
    area($raio);
}

if ($pergunta == "circunfêrencia") {
    circunf($raio);
}

else {
    print "Digite um valor válido\n\n";
    questao();
}
}

function area($raio){

    $area = 3.14 * $raio * $raio;
    print "A Área do seu círculo de raio de $raio centímetros é: $area centímetros";
}

function circunf($raio){
    $circunferencia = 2 * 3.14 * $raio;
    print "A circunfêrencia do seu círculo de raio de $raio centímetros é: $circunferencia centímetros";
}