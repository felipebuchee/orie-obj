
<?php

class Receita
{
    //atributos
    private $descricao;
    private $valor;

    //construct & tostring
    public function __construct($d, $v)
{
        $this->descricao = $d;
        $this->valor = $v;
    }

    public function __toString()
    {
        return "Descrição: " . $this->descricao . "\nValor: " . $this->valor . "\n";
    }

    //gets and setts
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

class Despesa
{
    //atributos
    private $descricao;
    private $valor;

    //construct & tostring
    public function __construct($d, $v)
    {
        $this->descricao = $d;
        $this->valor = $v;
    }

    public function __toString()
    {
        return "Descrição: " . $this->descricao . "\nValor: " . $this->valor . "\n";
    }

    //gets and setts
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

$escolha = 0;
$receitas = array();
$despesas = array();
do {
    print "\nMENU\n";
    print "1 ADD RECEITA\n";
    print "2 ADD DESPESA\n";
    print "3 LIST RECEITA\n";
    print "4 LIST DESPESA\n";
    print "5 SUMARIO\n";
    print "0 SAIR\n";

    $escolha = readline("Escolha a opção: ");
    switch ($escolha) {
        case 0:
            print "\nPrograma encerrado!\n";
            system("clear");
            break;

        case 1:
            $receita = new Receita(readline("Informe a descrição da receita: "), readline("Informe o valor da receita: "));
            array_push($receitas, $receita);
            break;

        case 2:
            $despesa = new Despesa(readline("Informe a descrição da despesa: "), readline("Informe o valor da despesa: "));
            array_push($despesas, $despesa);
            break;

        case 3:
            $ind = 1;
            foreach ($receitas as $receita) {
                print $ind . "-" . $receita;
                $ind++;
            }
            break;

        case 4:
            $ind = 1;
            foreach ($despesas as $despesa) {
                print $ind . "-" . $despesa;
                $ind++;
            }
            break;

        case 5:
            $totalReceita = 0;
            $totalDespesa = 0;

            foreach ($receitas as $receita) {
                $totalReceita += $receita->getValor();
            }
            foreach ($despesas as $despesa) {
                $totalDespesa += $despesa->getValor();
            }
            $saldo = $totalReceita - $totalDespesa;

            print "Saldo: R$" . $saldo . "\nTotal de Receitas: R$" . $totalReceita . "\nTotal de Despesas: R$" . $totalDespesa;
            break;

        default:
            print "Opção inválida\n";
            system("clear");
    }
} while ($escolha != 0);
