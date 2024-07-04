<?php

$nome;
$altura;
$peso;
$imc;

for ($i=0; $i < 5; $i++) { 
    $nome = readline("Digite seu nome:\n");

    $peso = readline("Digite seu peso em quilos:\n");

    $altura = readline("Digite sua altura em metros:\n");

    $imc = $peso / ($altura * $altura);

    print"$nome tem $peso quilos e $altura metros de altura, com $imc de IMC.\n\n";
}