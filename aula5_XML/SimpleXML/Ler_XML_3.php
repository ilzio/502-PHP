<?php

//METODO 3 FUNCAO NATIVA DO PHP, tambem cria um objeto

$apostilas = simplexml_load_file('apostilas.xml');
echo "<pre>";
print_r($apostilas);
