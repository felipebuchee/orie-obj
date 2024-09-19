<?php 

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

$cidades = array();

$santaCatarina = new Estado;
$santaCatarina->setNomeEstado("Santa Catarina");
$santaCatarina->setSigla("SC");

$parana = new Estado;
$parana->setNomeEstado("Paraná");
$parana->setSigla("PR");

$floripa = new Cidade();
$floripa->setNome("Florianópolis");
$floripa->setQtdHab("573211");
$floripa->setAltitude("8855");
$floripa->setEstado($santaCatarina);

$blumenau = new Cidade();
$blumenau->setNome("Blumenau");
$blumenau->setQtdHab("361855");
$blumenau->setAltitude("8855");
$blumenau->setEstado($santaCatarina);

$foz = new Cidade();
$foz->setNome("Foz do Iguaçu");
$foz->setQtdHab("258248");
$foz->setAltitude("8855");
$foz->setEstado($parana);

$cascavel = new Cidade();
$cascavel->setNome("Cascavel");
$cascavel->setQtdHab("348051");
$cascavel->setAltitude("8855");
$cascavel->setEstado($parana);

array_push($cidades, $floripa);
array_push($cidades, $blumenau);
array_push($cidades, $foz);
array_push($cidades, $cascavel);

foreach ($cidades as $c) {
    print $c;
}


