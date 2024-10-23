<?php 

require_once("IRadio.php");

class RadioRelogio implements IRadio{
    public function ligarRadio(){
        echo "RadioRelogio ligado.";
    }

    public function desligarRadio(){
        echo "RadioRelogio desligado.";
    }
}