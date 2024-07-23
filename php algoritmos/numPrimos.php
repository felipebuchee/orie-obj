<?php

$num;

function pergunta($num){
    
    $num  = readline("Digite um número para verificar se é um número primo ou não:\n");
    primos($num);
}

function primos($num){

    for ($i = 1; $i <= $num; $i++) {
        
        if ($num % $i == 0) {
            $divisor++;
        }
    }
    return true;

if ($divisor == 2) {
    return true;
}

else {
    return false;
    }

}

if (primos($num)) {
        echo "$num é primo!";
    } else {
        echo "$num não é primo.";
    } 

pergunta($num);
