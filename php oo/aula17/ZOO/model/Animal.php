<?php 

class Animal{
    protected $raca;
    protected $nome;


    public function getDados(){
        return "Raça: ". $this->raca. ", Nome: ". $this->nome;
    }

    /**
     * Get the value of raca
     */
    public function getRaca()
    {
        return $this->raca;
    }

    /**
     * Set the value of raca
     */
    public function setRaca($raca): self
    {
        $this->raca = $raca;

        return $this;
    }

    /**
     * Get the value of especie
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of especie
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}

class Cachorro extends Animal{
    public function latir(){
        return "Au! Au!";
    }
}

class Gato extends Animal{
    public function miar(){
        return "Miau!";
    }
}