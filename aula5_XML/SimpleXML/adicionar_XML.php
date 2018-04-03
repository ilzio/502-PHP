<?php

$apostilas = new SimpleXMLElement('apostilas.xml', null, true);

//addChild pega nome e valor como atributos
$apostilas->apostila[0]->addChild('paginas', '140');
$apostilas->apostila[1]->addChild('paginas', '180');
$apostilas->apostila[2]->addChild('paginas', '120');

$apostilas->saveXML('apostilas1.xml');
// header('Content-type: text/xml');
echo "<pre>";
echo $apostilas->asXML();
