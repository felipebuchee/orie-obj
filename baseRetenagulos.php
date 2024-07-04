<?php

function calculo($vetor){
    $area = $vetor["base"] * $vetor["altura"];
    return $area;
}

$retangulos = array();

for ($i=0; $i < 5 ; $i++) { 
    $base = readline("Informe a base:\n");
    $altura = readline("Informe a altura:\n");

    $ret = array();
    $ret["base"] = $base;
    $ret["altura"] = $altura;
    array_push($retangulos, $ret);
    
}

foreach($retangulos as $value){
    $area = calculo($value);
    echo $area . "\n";
}