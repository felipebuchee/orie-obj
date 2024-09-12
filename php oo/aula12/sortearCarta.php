<?php 

Class Carta{
    private $nome;

    private $numero;


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
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }
    
}

$cartas = [];
for ($i = 0; $i < 7; $i++) {

    $carta = new Carta();
    $carta->setNome(readline("Informe o nome da carta: \n"));
    $carta->setNumero(readline("Informe o número da carta: \n"));
    $cartas[] = $carta;
}

foreach ($cartas as $e) {
    print $e;

}