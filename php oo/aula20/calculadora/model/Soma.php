<?php 

require_once('Calculadora.php');

class Soma extends Calculadora{
    public function calcular(): mixed{
        return $this->getNumA() + $this->getNumB();
    }
}