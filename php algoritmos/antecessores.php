<?php

$num = readline("Digite um número positivo\n");
print"Número lido:$num\n";
for ($i=$num; $i >= 2 ; $i--) { 
    print $num - 1;
    print ", ";
    $num--;
}