
<?php

class Carros
{
    //atributos
    private $modelo;
    private $marca;
    private $anoFab;
    private $velMax;

    //metodos
    public function __toString()
    {
        return $this->modelo . "-" . $this->marca . ", fabricado em ". $this->anoFab .", com velocidade máxima de " . $this->velMax . "km/h.\n";
    }

    //gets e sets
    
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getAnoFab()
    {
        return $this->anoFab;
    }

    public function setAnoFab($anoFab): self
    {
        $this->anoFab = $anoFab;

        return $this;
    }

    public function getvelMax()
    {
        return $this->velMax;
    }

    public function setvelMax($velMax): self
    {
        $this->velMax = $velMax;

        return $this;
    }
}

//programa principal

function solicitarDados($var)
{
    $var->setModelo(readline("Informe o modelo do veículo: \n"));
    $var->setMarca(readline("Informe a marca do veículo: \n"));
    $var->setAnoFab(readline("Informe o ano de fabricacao do veículo: \n"));
    $var->setvelMax(readline("Informe a velocidade máxima do veículo: \n\n"));
}

function carroRapido($var)
{
    print "O carro mais rápido é: " . $var->__toString();
}

function carroLento($var)
{
    print "O carro mais lento é: ". $var->__toString(); 
}

$carro0 = new Carros;
solicitarDados($carro0);

$carro1 = new Carros;
solicitarDados($carro1);

$carro2 = new Carros;
solicitarDados($carro2);

if ($carro0->getvelMax() > $carro1->getvelMax() && $carro0->getvelMax() > $carro2->getvelMax()) 
{
    carroRapido($carros0);
    if ($carro1->getvelMax() > $carro2->getvelMax()) 
    {
        carroLento($carro2);
    }
    else
    {
        carroLento($carro1);
    }
}
elseif($carro1->getvelMax() > $carro0->getvelMax() && $carro1->getvelMax() > $carro2->getvelMax())
{
    carroRapido($carro1);
    if ($carro0->getvelMax() > $carro2->getvelMax()) 
    {
        carroLento($carro2);
    }
    else
    {
        carroLento($carro0);
    }
}
else
{
    carroRapido($carro2);
    if ($carro0->getvelMax() > $carro1->getvelMax()) 
    {
        carroLento($carro1);
    }
    else
    {
        carroLento($carro0);
    }
}
