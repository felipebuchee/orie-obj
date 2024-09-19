<?php 

require_once("Estado.php");

class Cidade{
    private string  $nome;
    private int  $qtdHab;
    private float  $altitude;
    private Estado $estado;

    public function __tostring(){
        return "A cidade de " . $this->nome . ", localizada no estado de " .  $this->estado->getNomeEstado() . "-" . $this->estado->getSigla() . ", possui " . $this->qtdHab . " habitantes e uma altitude de  " . $this->altitude . " metros.\n\n";
    }


    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of qtdHab
     */
    public function getQtdHab(): string
    {
        return $this->qtdHab;
    }

    /**
     * Set the value of qtdHab
     */
    public function setQtdHab(int $qtdHab): self
    {
        $this->qtdHab = $qtdHab;

        return $this;
    }

    /**
     * Get the value of altitude
     */
    public function getAltitude(): string
    {
        return $this->altitude;
    }

    /**
     * Set the value of altitude
     */
    public function setAltitude(int $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado(): Estado
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado(Estado $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}