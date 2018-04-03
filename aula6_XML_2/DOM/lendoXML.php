<?php
$xml = <<< 'XML'
<?xml version="1.0" encoding="UTF-8"?>
<apostilas>
	<apostila versao="1.0">
		<titulo>PHP</titulo>
		<topicos>
			<topico>Introdução</topico>
			<topico>Intermediário</topico>
			<topico>Avançado</topico>
		</topicos>
	</apostila>
	<apostila versao="1.0">
		<titulo>Java</titulo>
		<topicos>
			<topico>Introdução</topico>
			<topico>Intermediário</topico>
			<topico>Avançado</topico>
		</topicos>
	</apostila>
	<apostila versao="2.0">
		<titulo>Java</titulo>
		<topicos>
			<topico>Introdução</topico>
			<topico>Intermediário</topico>
			<topico>Avançado</topico>
		</topicos>
	</apostila>
</apostilas>
XML;

// 1) para ler de uma string xml
$dom = new DOMDocument(); //sem parametros

// $dom->loadXML($xml);

echo "<pre>";


// 2) para ler de um arquivo

$dom->load('apostilas.xml'); //quando e' so um arquivo nao é loadXML mais só load()

print_r($dom);
