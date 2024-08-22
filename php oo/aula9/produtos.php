<?php 

class Produtos{

    private $descricao;
    private $unidadeMedida;
    private $quantidade;
    private $valorUnt;

    public function __toString(){
        return "Produto: " . $this->descricao . "(" . $this->unidadeMedida . ") | ". $this->quantidade ." x " . $this->valorUnt . " = " . $this->getValorTotal() . "\n";
    }

    public function getValorTotal(){
        $valorTotal = $this->quantidade *  $this->valorUnt;
        return $valorTotal;

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
     * Get the value of unidadeMedida
     */
    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    /**
     * Set the value of unidadeMedida
     */
    public function setUnidadeMedida($unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valorUnt
     */
    public function getValorUnt()
    {
        return $this->valorUnt;
    }

    /**
     * Set the value of valorUnt
     */
    public function setValorUnt($valorUnt): self
    {
        $this->valorUnt = $valorUnt;

        return $this;
    }

}

function solicitarDados($var)
{
    $var->setDescricao(readline("Informe a descrição do produto: \n"));
    $var->setUnidadeMedida(readline("Informe unidade de medida do produto: \n"));
    $var->setQuantidade(readline("Informe a quantidade do produto: \n"));
    $var->setValorUnt(readline("Informe o preço unitário do produto: \n\n"));
}


$produto0 = new Produtos();
solicitarDados($produto0);
print $produto0;

$produto1 = new Produtos;
solicitarDados($produto1);
print $produto1;

$produto2 = new Produtos;
solicitarDados($produto2);
print $produto2;