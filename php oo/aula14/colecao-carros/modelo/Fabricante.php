<?php 

class Fabricante{
    private $nomeFabricante;
    private $siglaFabricante;

    

    /**
     * Get the value of nomeFabricante
     */
    public function getNomeFabricante()
    {
        return $this->nomeFabricante;
    }

    /**
     * Set the value of nomeFabricante
     */
    public function setNomeFabricante($nomeFabricante): self
    {
        $this->nomeFabricante = $nomeFabricante;

        return $this;
    }

    /**
     * Get the value of siglaFabricante
     */
    public function getSiglaFabricante()
    {
        return $this->siglaFabricante;
    }

    /**
     * Set the value of siglaFabricante
     */
    public function setSiglaFabricante($siglaFabricante): self
    {
        $this->siglaFabricante = $siglaFabricante;

        return $this;
    }
}