<?php

require_once('Produto.php');

class Balde extends Produto{
    private $capacidade;

    public function getDados(){
        return "Capacidade: " . $this->capacidade . "\n";
    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}
