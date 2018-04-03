<?php

//lendo o elemento

$dom = new DOMDocument(); //sem parametros
$dom->load('apostilas.xml'); //quando e' so um arquivo nao é loadXML mais só load()

//localizando o elemento ~= jquery

$titulo = $dom->getElementsByTagName('titulo'); //retorna objeto DOMNodelist com lenght 3

// print_r($titulo);

// alterando o valor
    // pega valor do primeiro item (0)
    // print_r($titulo->item(0));
echo $titulo->item(0)->nodeValue='PHP Enterprise';

//salvando
$dom->save('apostilas.xml');


// exibindo
print_r($dom->saveXML()); // saveXML() gera uma string do xml
