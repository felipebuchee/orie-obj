<?php

require_once("Prato.php");

class Pedido
{
    private string $nomeCliente;
    private string $nomeGarcom;
    private Prato $prato;

    public function __tostring(){
        return "Pedido: \nCliente: ". $this->nomeCliente. "\nGarçom: ". $this->nomeGarcom. "\nPrato: ". $this->prato->__toString() . "\n\n";
    }

    

    /**
     * Get the value of nomeCliente
     */
    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    /**
     * Set the value of nomeCliente
     */
    public function setNomeCliente(string $nomeCliente): self
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }

    /**
     * Get the value of nomeGarcom
     */
    public function getNomeGarcom(): string
    {
        return $this->nomeGarcom;
    }

    /**
     * Set the value of nomeGarcom
     */
    public function setNomeGarcom(string $nomeGarcom): self
    {
        $this->nomeGarcom = $nomeGarcom;

        return $this;
    }

    /**
     * Get the value of prato
     */
    public function getPrato(): Prato
    {
        return $this->prato;
    }

    /**
     * Set the value of prato
     */
    public function setPrato(Prato $prato): self
    {
        $this->prato = $prato;

        return $this;
    }
}
