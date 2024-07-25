<?php

class Retangulo {
    public $base;
    public $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    function perimetro(){
     $calcPerim = ($this->base * 2) + ($this->altura * 2);
    return $calcPerim;
    }

    function area(){
        $calcArea = $this->base * $this->altura;
        return $calcArea;
    }
}

for ($i=0; $i < 3 ; $i++) { 

    $base = readline("Qual a base do retângulo em cm?\n");
    $altura = readline("Qual a altura do retângulo em cm?\n");
    
    $rectangles = new Retangulo($base, $altura);
    $rectangles->area();
    $rectangles->perimetro();

    print($rectangles->area() . "cm de área!\n");
    print($rectangles->perimetro() . "cm de área!\n\n");
}