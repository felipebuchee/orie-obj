<?php

class Posto
{
    private $litrosGasolina;
    private $abastecimentoGasolina;

    public function __construct()
    {
        $this->litrosGasolina = 0;
        $this->abastecimentoGasolina = array();
    }

    public function abastecer($litros)
    {
        if ($litros <= $this->litrosGasolina) {
            $this->abastecimentoGasolina[] = $litros;
            $this->litrosGasolina -= $litros;
            return true;
        } else {
            return false;
        }
    }

    public function reporEstoque($litros)
    {
        $this->litrosGasolina += $litros;
    }

    public function listarAbastecimentos()
    {
        foreach ($this->abastecimentoGasolina as $i => $litros) {
            print "- Abastecimento " . ($i + 1) . ": $litros litros\n";
        }
    }

    public function getLitrosGasolina()
    {
        return $this->litrosGasolina;
    }

    public function setLitrosGasolina($litrosGasolina): self
    {
        $this->litrosGasolina = $litrosGasolina;
        return $this;
    }

    public function getAbastecimentoGasolina()
    {
        return $this->abastecimentoGasolina;
    }

    public function setAbastecimentoGasolina($abastecimentoGasolina): self
    {
        $this->abastecimentoGasolina = $abastecimentoGasolina;
        return $this;
    }
}

// Programa principal
$posto = new Posto();

do {
    print "\n ALEGRETE POSTOS E CONVENIÊNCIA \n";
    print " 1 ABASTECER \n";
    print " 2 LISTAR ABASTECIMENTOS\n";
    print " 3 REPOR ESTOQUE\n";
    print " 0 SAIR\n";

    $escolha = readline("De qual serviço você necessita? ");

    switch ($escolha) {

        case 0:
            print "SERVIÇO ENCERRADO, ATÉ A PRÓXIMA";
            break;

        case 1:
            $litros = readline("Quanto você deseja abastecer?: ");
            if ($posto->abastecer($litros)) {
                print "ABASTECIMENTO REALIZADO COM SUCESSO \n";
            } else {
                print "Não há litros suficientes no estoque.\n";
            }
            break;

        case 2:
            $posto->listarAbastecimentos();
            break;

        case 3:
            $litros = readline("Quanto você deseja repor no estoque?: ");
            $posto->reporEstoque($litros);
            print "ESTOQUE REPOSTO COM SUCESSO \n";
            break;

        default:
            print "ALTERNATIVA INVÁLIDA!!\n";
            break;
    }
} while ($escolha != 0);