<?php

require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");

$pratos = array();
$pedidos = array();

$prato1 = new Prato();
$prato1->setNome("Camarão  à Milanesa");
$prato1->setNumero(1);
$prato1->setValor(110);

$prato2 = new Prato();
$prato2->setNome("Pizza Margherita");
$prato2->setNumero(2);
$prato2->setValor(80);

$prato3 = new Prato();
$prato3->setNome("Macarrão à Carbonara");
$prato3->setNumero(3);
$prato3->setValor(60);

$prato4 = new Prato();
$prato4->setNome("Bife à Parmegiana");
$prato4->setNumero(4);
$prato4->setValor(75);

$prato5 = new Prato();
$prato5->setNome("Risoto ao Funghi");
$prato5->setNumero(5);
$prato5->setValor(70);

array_push($pratos, $prato1, $prato2, $prato3, $prato4, $prato5);

do {
    print "\n ⋇⊶⊰⊱⊷⋇ CANTINA NOSSA!!! ⋇⊶⊰⊱⊷⋇ \n";
    print " 1 CADASTRAR \n";
    print " 2 CANCELAR \n";
    print " 3 LISTAR\n";
    print " 4 TOTAL\n";
    print " 0 SAIR\n";

    $escolha = (int) readline("Qual serviço deseja utilizar? " . "\n");

    switch ($escolha) {

        case 0:
            print "ATÉ A PRÓXIMA";
            break;

        case 1:
            print "CADASTRANDO PEDIDO!\n";

            foreach ($pratos as $i => $p) {
                print ($i + 1) . " - " . $p->getNome() . "\n";
            }

            $pratoNumero = (int) readline("Quais os pratos pedidos? (digite o número do prato): \n");

            $pratoSelecionado = null;
            foreach ($pratos as $p) {
                if ($p->getNumero() == $pratoNumero) {
                    $pratoSelecionado = $p;
                    break;
                }
            }

            if ($pratoSelecionado == null) {
                print "Prato não encontrado!\n";
                break;
            }

            $pedido = new Pedido();
            $pedido->setPrato($pratoSelecionado);
            $pedido->setNomeCliente(readline("Qual o nome do cliente?: \n"));
            $pedido->setNomeGarcom(readline("Qual o nome do garçom?: \n"));
            array_push($pedidos, $pedido);

            print "Pedido cadastrado com sucesso!\n";
            break;

        case 2:
            print "CANCELANDO PEDIDO!\n";

            foreach ($pedidos as $i => $ped) {
                print ($i + 1) . "º Pedido\n" . $ped;
            }

            $indiceRemover = (int) readline("Quem você gostaria de remover? (INFORME O NÚMERO): ");
            $indiceRemover--;

            if ($indiceRemover >= 0 && $indiceRemover < count($pedidos)) {
                array_splice($pedidos, $indiceRemover, 1);
            } else {
                print "REMOÇÃO INVÁLIDA! \n";
            }

            break;

        case 3:
            print "LISTANDO PEDIDOS!\n";

            foreach ($pedidos as $i => $ped) {
                print ($i + 1) . "º Pedido\n" . $ped;
            }

            break;

        case 4:
            $totalVendas = 0;
            foreach ($pedidos as $ped) {
                $totalVendas += $ped->getPrato()->getValor();
            }
            print("Total de vendas: R$" . $totalVendas);
            break;

        default:
            print "ALTERNATIVA INVÁLIDA!!\n";
            break;
    }
} while ($escolha != 0);