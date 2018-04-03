<?php

$dom = new DOMDocument();
$dom->load('apostilas.xml');
//mostrando o atributo

//localizando elemento
$apostilas = $dom->getElementsByTagName('apostila');

//pegando o valor do atributo
echo $apostilas->item(0)->getAttribute('versao');

//alterando o valor do atributo

$apostilas->item(0)->setAttribute('versao', '2.0');

//adicionando um novo atributo

$apostilas->item(0)->setAttribute('revisao', '2013');


//removendo atributo
$apostilas->item(0)->removeAttribute('revisao');


$dom->save('apostila.xml');
echo $dom->saveXML();
