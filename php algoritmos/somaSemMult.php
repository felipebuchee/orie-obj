<?php

$multiplicado = readline("Digite o número que você deseja multiplicar:\n");

$multiplicando = readline("Digite quantas vezes você quer multiplicar esse número:\n");

$soma = 0;

for ($i=0; $i < $multiplicando; $i++) { 
    $soma = $soma + $multiplicado;
}

print "O resultado é: $soma";
