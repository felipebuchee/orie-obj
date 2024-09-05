<?php 

class Pratos
{
    private string $descricao;
    private int $quantidade;
    private float $valorUnit;

    public function __toString()
    {
        return "Prato: " . $this->descricao . "(" . $this->quantidade . " Unidades) custa " . $this->valorUnit . " reais/und. \n";
    } 

    public function valorPrato(){
        $valorPrato = $this->quantidade *  $this->valorUnit;
        return $valorPrato;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade(int $quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valorUnit
     */
    public function getValorUnit(): float
    {
        return $this->valorUnit;
    }

    /**
     * Set the value of valorUnit
     */
    public function setValorUnit(float $valorUnit): self
    {
        $this->valorUnit = $valorUnit;

        return $this;
    }
}

//programa principal
$valorJanta = 0;
$pratos = [];
for ($i = 0; $i < 3; $i++) {

    $prato = new Pratos();
    $prato->setDescricao(readline("Informe a descrição do prato: \n"));
    $prato->setQuantidade(readline("Informe a quantdiade do prato: \n"));
    $prato->setValorUnit(readline("Informe o valor unitário do prato: \n\n"));

    $pratos[] = $prato;
    
}

foreach ($pratos as $p) {
    print $p;
    $valorJanta = $valorJanta + $prato->valorPrato();

}


print("A janta custou no final " . $valorJanta . " reais!");



