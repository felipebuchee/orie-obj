<?php 

class Especie {
    public $especie, $patas, $pele, $som, $movimento;

    public function __construct($especie, $patas, $pele, $som, $movimento) {
        $this->especie = $especie;
        $this->patas = $patas;
        $this->pele = $pele;
        $this->som = $som;
        $this->movimento = $movimento;
    }

    
}