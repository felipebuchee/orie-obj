<?php 

require_once("modelo/time.php");
require_once("modelo/jogador.php");

$time = new Time();
$time->setNome("São Paulo");
$time->setCidade("São paulo");

$rodrigo = new Jogador();
$rodrigo->setNome("Rodrigo");
$rodrigo->setNumero("7");
$rodrigo->setTime($time);

$calleri = new Jogador();
$calleri->setNome("Calleri");
$calleri->setNumero("10");
$calleri->setTime($time);

$jogadores = array();
array_push($jogadores,  $rodrigo);
array_push($jogadores,  $calleri);
$time->setJogadores($jogadores);
print_r($time->getJogadores());
