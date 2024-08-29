<?php

class Escola
{
    private $nome;
    private $endereco;
    private $quantAlunos;

    public function __toString()
    {
        return "Escola: " . $this->nome . "(" . $this->endereco . ") conta com " . $this->quantAlunos . " alunos. \n";
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
     * Get the value of quantAlunos
     */
    public function getQuantAlunos()
    {
        return $this->quantAlunos;
    }

    /**
     * Set the value of quantAlunos
     */
    public function setQuantAlunos($quantAlunos): self
    {
        $this->quantAlunos = $quantAlunos;

        return $this;
    }
}

//programa principal
//1.1 e 1.2
$escolas = [];
for ($i = 0; $i < 4; $i++) {

    $escola = new Escola();
    $escola->setNome(readline("Informe o nome da escola: \n"));
    $escola->setEndereco(readline("Informe o endereço da escola: \n"));
    $escola->setQuantAlunos(readline("Informe a quantidade de alunos da escola: \n\n"));

    $escolas[] = $escola;
}

foreach ($escolas as $e) {
    print $e;
}

//1.3

$maiorEscola = $escolas[0];
foreach ($escolas as $e) {
    if($e->getQuantAlunos() > $maiorEscola->getQuantAlunos()){
        $maiorEscola = $e;
    }
}

echo "A escola com mais alunos é: " . "\n";
echo $maiorEscola->getNome(), $maiorEscola->getEndereco(), $maiorEscola->getQuantAlunos();