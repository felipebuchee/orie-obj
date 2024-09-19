<?php 

class Turma{
    private  $nome;
    private $ano;
    private array $alunos;

    public function __construct($nome, $ano) {
        $this->nome = $nome;
        $this->ano = $ano;
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

    /**
     * Get the value of alunos
     */
    public function getAlunos(): array
    {
        return $this->alunos;
    }

    /**
     * Set the value of alunos
     */
    public function setAlunos(array $alunos): self
    {
        $this->alunos = $alunos;

        return $this;
    }
}