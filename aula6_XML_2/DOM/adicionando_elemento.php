<?php

$dom = new DOMDocument();
$dom->load('apostilas.xml');

//localizando
$apostilas = $dom->getElementsByTagName('apostila');

print_r($apostilas);

// criar novo emelento

$codigo = $dom->createElement('codigo', '500');
// appendar o novo elemento
$apostilas->item(0)->appendChild($codigo);

//salvar

$dom->save('apostila.xml');
echo "<pre>";
echo $dom->saveXML();
