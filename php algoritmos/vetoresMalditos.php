<?php 

$vetor = [];
$num = 0;

for ($i=0; $i < 5 ; $i++) { 
    $num = readline("Digite um número:\n");
    array_push($vetor, $num);
    //print_r($vetor);
}

print_r(faren($vetor));

function faren($vetor){
    $faren = [];
    foreach ($vetor as $calculo) {
       $calculo = $calculo * 1.8 + 32;
       array_push($faren, $calculo);
    }
    return $faren;

    function faren($vetor){
        $faren = [];
        foreach ($vetor as $calculo) {
           $calculo = $calculo * 1.8 + 32;
           array_push($faren, $calculo);
                }
      }      
      return $faren;
}