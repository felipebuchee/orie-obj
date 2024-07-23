<?php

$num = readline("Escreva um número positivo ou negativo\n");

if ($num > 0) {
    $num = $num * 2;
    print "Resultado:$num";
}

if ($num < 0) {
    $num = $num * 3;
    print "Resultado:$num";
} 
    if ($num == 0) {
        print"Esse não é um número válido";
    }
