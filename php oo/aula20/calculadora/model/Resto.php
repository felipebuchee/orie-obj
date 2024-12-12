<?php 

require_once('Calculadora.php');

class Resto extends Calculadora{
    public function calcular(): mixed{
        return $this->getNumA() % $this->getNumB();
    }
}