<?php

$num1 = readline("Digite um número: \n");
$num2 = readline("Digite quantas vezes você quer multiplicar esse número: \n");
$resultado;
multiplicar($num1, $num2, $resultado);

function multiplicar($num1, $num2, $resultado){

    for ($i=0; $i < $num2 ; $i++) { 
        
        $resultado += $num1;

    }
    print "O número $num1 multiplicado por $num2 é: $resultado";
}