<?php 

require_once('Espaco.php');
class Ponto extends Espaco{
    private int $duracaoVisita;

    public function getDadosPonto(){
        return "Ponto turístico com duração de ". $this->duracaoVisita. " minutos.";
    }


    /**
     * Get the value of duracaoVisita
     */
    public function getDuracaoVisita(): int
    {
        return $this->duracaoVisita;
    }

    /**
     * Set the value of duracaoVisita
     */
    public function setDuracaoVisita(int $duracaoVisita): self
    {
        $this->duracaoVisita = $duracaoVisita;

        return $this;
    }
}