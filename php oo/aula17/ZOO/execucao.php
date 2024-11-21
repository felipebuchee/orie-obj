<?php 

require_once('model/Animal.php');

$gato1 = new Gato();
$gato1->setNome('Garfield');
$gato1->setRaca('Persa');

$gato2 = new Gato();
$gato2->setNome('Félix');
$gato2->setRaca('Muchkin');

$cachorro1 = new Cachorro();
$cachorro1->setNome('Rex');
$cachorro1->setRaca('Poodle');

$cachorro2 = new Cachorro();
$cachorro2->setNome('Buddy');
$cachorro2->setRaca('Golden Retriever');

$animais = array($gato1, $gato2, $cachorro1, $cachorro2);

foreach ($animais as $a) {
    print $a;
}
