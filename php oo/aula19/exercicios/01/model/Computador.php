<?php

require_once('Produto.php');

class Computador extends Produto{
    private $processador;

    public function getDados(){
        return "Processador: " . $this->processador . "\n";
    }

    /**
     * Get the value of processador
     */
    public function getProcessador()
    {
        return $this->processador;
    }

    /**
     * Set the value of processador
     */
    public function setProcessador($processador): self
    {
        $this->processador = $processador;

        return $this;
    }
}
