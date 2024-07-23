<?php

function mostrarArray($array){
    foreach ($array as $value) {
        echo $value . " | ";
    }
}
function mostraChave($array){
    foreach ($array as $key => $value) {
        echo $key. " | ";
    }
}