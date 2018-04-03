<?php

$dom = new DOMDocument();
$dom->load('apostilas.xml');

//localizando
$titulos = $dom->getElementsByTagName('titulo');

// removendo elemento
// o primero filho do pai do mesmo elemento
$titulos->item(0)->parentNode->removeChild($titulos->item(0));

//salvar

$dom->save('apostila.xml');
echo "<pre>";
echo $dom->saveXML();
