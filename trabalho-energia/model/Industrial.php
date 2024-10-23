<?php 

require_once ('IConsumidorEnergia.php');

class Industrial implements IConsumidorEnergia{

    private int $consumo;

    public function getValorFatura(){
        
        if ($this->consumo <= 500){ 
            return $this->consumo * 1.8;
        }

        else {
            return $this->consumo * 2.3;
        }
    }

    /**
     * Get the value of consumo
     */
    public function getConsumo(): int
    {
        return $this->consumo;
    }

    /**
     * Set the value of consumo
     */
    public function setConsumo(int $consumo): self
    {
        $this->consumo = $consumo;

        return $this;
    }
}