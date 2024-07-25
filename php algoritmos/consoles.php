<?php

$console1 = array(
    "nome" => "PlayStation 3",
    "fabricante" => "Sony",
    "anoLancamento" => 2006,
    "servicoAss" => "Playstation Plus"
);

$console2 = array(
    "nome" => "Xbox Series X",
    "fabricante" => "Microsoft",
    "anoLancamento" => 2020,
    "servicoAss" => "Xbox Live Gold"
);

$console3 = array(
    "nome" => "Super Nintendo",
    "fabricante" => "Nintendo",
    "anoLancamento" => 1990,
    "servicoAss" => "Não há serviço de assinatura"
);

$consoles = array($console1, $console2, $console3);


function exibirConsole($console) {
    print $console["nome"] . " | " . $console["fabricante"] . " | " . $console["anoLancamento"] . " | " . $console["servicoAss"] . "\n\n";
}


foreach ($consoles as $console) {
    exibirConsole($console);
}