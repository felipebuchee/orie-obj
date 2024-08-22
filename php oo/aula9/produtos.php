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

if ($produto0->getValorTotal() > $produto1->getValorTotal() && $produto0->getValorTotal() > $produto2->getValorTotal()) 
{
    produtoCaro($produto0);
    if ($produto1->getValorTotal() > $produto2->getValorTotal()) 
    {
        produtoBarato($produto2);
    }
    else
    {
        produtoBarato($produto1);
    }
}
elseif($produto1->getValorTotal() > $produto0->getValorTotal() && $produto1->getValorTotal() > $produto2->getValorTotal())
{
    produtoCaro($produto1);
    if ($produto0->getValorTotal() > $produto2->getValorTotal()) 
    {
        produtoBarato($produto2);
    }
    else
    {
        produtoBarato($produto0);
    }
}
else
{
    produtoCaro($produto2);
    if ($produto0->getValorTotal() > $produto1->getValorTotal()) 
    {
        produtoBarato($produto1);
    }
    else
    {
        produtoBarato($produto0);
    }
}

function produtoCaro($var)
{
    print "O produto mais caro é: " . $var->getDescricao() . " " .  $var->getUnidadeMedida() . " com valor de ". $var->__toString();
}

function produtoBarato($var)
{
    print "O produto mais barato é: " . $var->getDescricao() .  " ". $var->getUnidadeMedida() . " com valor de ". $var->__toString();
}