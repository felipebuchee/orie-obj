<?php

function pergunta(){
    $num = readline("Digite um número para verificar se é um número primo ou não:\n");
    
    while ($num >= 2) {
        if (primos($num)) {
            print "$num é primo!\n";
        } 
        
        else {
            print "$num não é primo.\n";
        }
        $num = readline("Digite outro número:\n");
    }
}

function primos($num){
    $divisores = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $divisores++;
        }
    }

    if ($divisores == 2) {
        return true;
    } 
    
    else {
        return false;
    }
}

pergunta();
