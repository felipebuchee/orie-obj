<?php 

require_once("modelo/Aluno.php");
require_once("modelo/Turma.php");


$tds = new Turma("Técnico em Desenvolvimento de Sistemas", "2024");

for ($i=0; $i < 5; $i++) {
    $nome = readline("Informe o nome do aluno: ");
    $idade = readline("Informe a idade do aluno: ");

    $aluno = new Aluno($nome, $idade);
}

foreach ($turmas as $t) {
    print($t);
}