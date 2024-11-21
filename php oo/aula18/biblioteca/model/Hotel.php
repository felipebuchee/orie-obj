<?php 

require_once('Espaco.php');

class Hotel extends Espaco{
    private int $numEstrelas;
    private bool $cafeIncluso;


    public function getDadosHotel(){
        return "Hotel com ". $this->numEstrelas. " estrelas e ". ($this->cafeIncluso? "cafe incluso" : "cafe não incluso"). ".";
    }


    /**
     * Get the value of numEstrelas
     */
    public function getNumEstrelas(): int
    {
        return $this->numEstrelas;
    }

    /**
     * Set the value of numEstrelas
     */
    public function setNumEstrelas(int $numEstrelas): self
    {
        $this->numEstrelas = $numEstrelas;

        return $this;
    }

    /**
     * Get the value of cafeIncluso
     */
    public function isCafeIncluso(): bool
    {
        return $this->cafeIncluso;
    }

    /**
     * Set the value of cafeIncluso
     */
    public function setCafeIncluso(bool $cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}