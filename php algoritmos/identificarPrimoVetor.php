<?php

$vetor = [];
$num = 1;

while($num != 0) { 
    $num = readline("Digite um número, excecto 0:\n");

    $ehPrimo = true;
    calc($num, $ehPrimo, $vetor);

    function calc($num, $ehPrimo, $vetor){
        for ($j=2; $j < $num ; $j++) { 
            if ($num % $j == 0) {
                $ehPrimo = false;
                break;
            }
        }
        if($ehPrimo){
            array_push($vetor, $num);
        }
    }
}

foreach($vetor as $value)
    print "$value \n";