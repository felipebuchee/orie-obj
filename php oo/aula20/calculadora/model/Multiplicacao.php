<?php 

require_once('Calculadora.php');

class Multiplicacao extends Calculadora{
    public function calcular(): mixed{
        return $this->getNumA() * $this->getNumB();
    }
}