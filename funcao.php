<?php

$num = readline("Digite um número: \n");
fatorial($num);
function fatorial($num =1){
    $fatorial = 1;

    for ($i=$num; $i > 0 ; $i--) { 
        $fatorial = $fatorial * $i;
    }

    print("O resultado é: $fatorial");

}