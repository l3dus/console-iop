<?php

if (file_exists(__DIR__.'/src/Logs/server.txt')) {
    $lista = file_get_contents(__DIR__.'/src/Logs/server.txt');
    $lista_array = explode("\n", $lista);
    foreach($lista_array as $lista_item) {
        echo $lista_item.'<br/>';
    }
} else {
    $lista = null;
}



