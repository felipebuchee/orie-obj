<?php 

class Estado{
    private string $sigla;
    private string $nome_estado;

    

    /**
     * Get the value of sigla
     */
    public function getSigla(): string
    {
        return $this->sigla;
    }

    /**
     * Set the value of sigla
     */
    public function setSigla(string $sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Get the value of nome_estado
     */
    public function getNomeEstado(): string
    {
        return $this->nome_estado;
    }

    /**
     * Set the value of nome_estado
     */
    public function setNomeEstado(string $nome_estado): self
    {
        $this->nome_estado = $nome_estado;

        return $this;
    }
}