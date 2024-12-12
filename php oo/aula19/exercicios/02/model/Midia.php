<?php 

class Midia{
    private $descricao;
    private $precoPago;

    public function getDados(){
        return "Descrição: " . $this->descricao . "Preço pago: " . $this->precoPago;
    }

    public function getTipo(){
        
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of precoPago
     */
    public function getPrecoPago()
    {
        return $this->precoPago;
    }

    /**
     * Set the value of precoPago
     */
    public function setPrecoPago($precoPago): self
    {
        $this->precoPago = $precoPago;

        return $this;
    }
}