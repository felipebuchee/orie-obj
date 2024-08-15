<?php

class Pessoas
{

    private $nome;
    private $endereco;
    private $cidade;
    private $uf;
    private $altura;

    public function dadosImprimidos()
    {
        return "Olá mundo, sou " . $this->nome . ", resido no endereço " . $this->endereco . "," . $this->cidade . "-" . $this->uf . " e possuo uma altura de " . $this->altura . "m\n\n";
    }



    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     */
    public function setUf($uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}


$pessoa0 = new Pessoas();
$pessoa0->setNome("Sarah");
$pessoa0->setEndereco("Rua 22");
$pessoa0->setCidade("Santa Tristezinha de Itaipu");
$pessoa0->setUF("pr");
$pessoa0->setAltura("1.72");

$pessoa1 = new Pessoas();
$pessoa1->setNome("Aízhis");
$pessoa1->setEndereco("Rua 69");
$pessoa1->setCidade("Buraco Beltrão");
$pessoa1->setUF("pr");
$pessoa1->setAltura("1.75");

print $pessoa0->dadosImprimidos();
print $pessoa1->dadosImprimidos();
