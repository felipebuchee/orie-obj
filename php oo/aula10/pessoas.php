
<?php

class Pessoa {
    private string $nome;
    private string $sobrenome;
    private int $idade;

    public function getNome(): string {
        return $this->nome;
    }

    
    public function setNome(string $nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getSobrenome(): string {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): self{
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): self {
        $this->idade = $idade;

        return $this;
    }

    public function __toString() {
        $dados = $this->getNome() . " " . $this->getSobrenome() . ", " . $this->getIdade() . " anos \n";
        return $dados;
    }
}

// programa principal
$escolha = 0;

$cadastro = array();

do {
    print "\n   --------- MENU ----------- \n";
    print " 1 -------- CADASTRE-SE ------ \n";
    print " 2 -------- LISTAR --------- \n";
    print " 0 -------- SAIR ----------- \n";

    $escolha = readline("De qual serviço você necessita? ");

    switch ($escolha) {

        case 0: 
            print "SERVIÇO ENCERRADO...";
            break;

        case 1:

            $novoCadastro = new Pessoa();
            $novoCadastro->setNome(readline("Informe o nome para o cadastro: "));
            $novoCadastro->setSobrenome(readline("Informe o sobrenome para o cadastro: "));
            $novoCadastro->setIdade(readline("Informe a idade para o cadastro: "));
            
            array_push($cadastro , $novoCadastro);

            print "O cadastro foi realizado com sucesso!";

            break;

        case 2:
            
            foreach ($cadastro as $c) {
                print $c;
            }

        break;
        
        default:
            print "SERVIÇO INVÁLIDO!!";
            break;
    }
    
} while ($escolha != 0); 
