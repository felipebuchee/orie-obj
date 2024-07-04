<?php

function imprimeVetor($vet){
    foreach ($vet as $v) {
        echo $v . "|";
    }
}

$equipes = ["McLaren", "Ferrari", "Mercedes", "RedBull", "Alpine"];
$jogos = ["Stardew Valley", "Minecraft", "F1", "Farming Simulator", "GTA"];
$mcqueen = ["Chico Virabrequim", "Relâmpago McQueen", "Moço Que Não Sabe Fazer Curva Na Areia", "Decalque ", "Lamacento"];
$stardew = ["Abigail", "Harvey", "Maru", "Haley", "Leah"];

imprimeVetor($equipes);
echo "\n";
imprimeVetor($jogos);
echo "\n";
imprimeVetor($mcqueen);
echo "\n";
imprimeVetor($stardew);