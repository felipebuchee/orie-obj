<?php 

require_once('Calculadora.php');

class Divisao extends Calculadora{
    public function calcular(): mixed{
        return $this->getNumA() / $this->getNumB();
    }
}