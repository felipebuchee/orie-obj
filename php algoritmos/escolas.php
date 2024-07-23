<?php

$turmas = array();

for ($i=0; $i < 4 ; $i++) { 
    $curso = readline("Qual curso você deseja cadastrar?\n");

    $ano = readline("Qual o ano de ínicio dessa turma??\n");

    $qtdAlunos = readline("Quantos alunos essa turma tem??\n");

    $info = [

        "Curso" => $curso,
        "Ano" => $ano,
        "QuantAluno" => $qtdAlunos
    ];
}


foreach ($turmas as $info) {
    for ($i=0; $i < 4 ; $i++) { 
        $totAluno = $info["QuantAluno"] + $info["QuantAluno"];
    }
}
print("O total de alunos é: " . $totAluno * 2);