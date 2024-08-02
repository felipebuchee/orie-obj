<?php

class Pokemon {
    //Atributos: características
    public $nome;
    public $tipo;
    
    //public $ataque;
    //public $defesa;
    //public $velocidade;

    public $nivel;
    public $pontosVida;
    public $experiencia;

    //Construtor
    function __construct() {
        $this->nivel = 1;
        $this->pontosVida = 10;
        $this->experiencia = 0;
    }

    //Métodos: ações
    function batalhar() {
        $this->aumentarExperiencia(5);        
    }

    function aumentarNivel() {
        $this->nivel = $this->nivel +1;
        $this->aumentarPontosVida();
        $this->experiencia = 0;
    }

    function aumentarPontosVida() {
        $this->pontosVida = $this->nivel * 10;
    }

    function aumentarExperiencia($exp) {
        $this->experiencia += $exp;
        if($this->experiencia >= 100)
            $this->aumentarNivel();
    }

    function dados() {
        $dados = "Nome = " . $this->nome;
        $dados = $dados = "Tipo = " . $this->tipo;
        $dados = $dados = "Nível = " . $this->nivel;
        $dados = $dados = "PV = " . $this->pontosVida;
        $dados = $dados = "Exp = " . $this->experiencia;

        return $dados;

    }

}//FINAL classe Pokemon


//Programa principal
$arcanine = new Pokemon();
$arcanine->nome = "Arcanine";
$arcanine->tipo = "Fogo";
print_r($arcanine);

$vaporeon = new Pokemon();
$vaporeon->nome = "Vaporeon";
$vaporeon->tipo = "Água";
print_r($vaporeon);


for($i = 0; $i < 10000; $i++) {
$arcanine->batalhar();
$vaporeon->batalhar();

$resultado = rand();

$experiencia = 0;

if($resultado < 10) {
    $arcanine->aumentarExperiencia($experiencia);
    print("Arcanine ganha a batalha!");
} 

else {
    $vaporeon->aumentarExperiencia($experiencia);
    print("Vaporeon ganha a batalha!");
} 
} 

echo $arcanine->dados();
echo $vaporeon->dados();