<?php

class Trapezio
{
    private int $baseMaior;
    private int $baseMenor;
    private int $altura;

    public function calculo()
    {
        $area = (($this->baseMaior +  $this->baseMenor) * $this->altura) / 2;
        return $area;
    }



    /**
     * Get the value of baseMaior
     */
    public function getBaseMaior()
    {
        return $this->baseMaior;
    }

    /**
     * Set the value of baseMaior
     */
    public function setBaseMaior($baseMaior): self
    {
        $this->baseMaior = $baseMaior;

        return $this;
    }

    /**
     * Get the value of baseMenor
     */
    public function getBaseMenor()
    {
        return $this->baseMenor;
    }

    /**
     * Set the value of baseMenor
     */
    public function setBaseMenor($baseMenor): self
    {
        $this->baseMenor = $baseMenor;

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

$trapezios = [];
for ($i = 0; $i < 3; $i++) {

    $trapezio = new Trapezio();
    $trapezio->setBaseMaior(readline("Informe a base maior do trapézio: \n"));
    $trapezio->setBaseMenor(readline("Informe a base menor do trapézio: \n"));
    $trapezio->setAltura(readline("Informe a altura do trapézio: \n\n"));

    $trapezios[] = $trapezio;
}
$maiorTrapezio = $trapezios[0];
foreach ($trapezios as $t) {
    $area = $t->calculo();
    print "O trapézio de base maior: " . $t->getBaseMaior() . ", base menor: " . $t->getBaseMenor() . " e altura: " . $t->getAltura() . " tem área de " . $area . "\n";

    if ($t->calculo() > $maiorTrapezio->calculo()) {
        $maiorTrapezio = $t;
    }
}

print "O maior trapézio é o de base maior: " . $maiorTrapezio->getBaseMaior() . ", base menor: " . $maiorTrapezio->getBaseMenor() . " e altura: " . $maiorTrapezio->getAltura() . "\n";
print "Com área de: " . $maiorTrapezio->calculo() . "\n";
