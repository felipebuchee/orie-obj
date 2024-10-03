<?php 

require_once("Fabricante.php");

class Carro{
    private Fabricante $fabric;
    private $modelo;
    private $ano;

    

    /**
     * Get the value of fabric
     */
    public function getFabric(): Fabricante
    {
        return $this->fabric;
    }

    /**
     * Set the value of fabric
     */
    public function setFabric(Fabricante $fabric): self
    {
        $this->fabric = $fabric;

        return $this;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno($ano): self
    {
        $this->ano = $ano;

        return $this;
    }
}

