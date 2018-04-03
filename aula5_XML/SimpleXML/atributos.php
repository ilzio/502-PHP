<?php

$apostilas = new SimpleXMLElement('apostilas.xml', null, true);

// pegar atributos - nesse caso é a versão das apostilas
echo "<pre>";
// echo $apostilas->apostila[0]->attributes() . "<br>";
// echo $apostilas->apostila[1]->attributes() . "<br>";
// echo $apostilas->apostila[2]->attributes() . "<br>";
//
// alterar atributos

// $apostilas->apostila[2]->attributes()->versao = '3,0';
// echo $apostilas->apostila[2]->attributes();
// echo $apostilas->apostila[2]->attributes();

//adicionar atributos

$apostilas->apostila[1]->attributes()->addAttribute('ano','2018');

unset($apostilas->apostila[1]->attributes()->ano);

$apostilas->saveXML('apostilas1.xml');

echo $apostilas->asXML();
