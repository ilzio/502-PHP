<?php

$pessoas = [
	[
		'nome' => 'Heath Ledger',
		'data_nasc' => '19/05/1956',
	],
	[
		'nome' => 'Alfie Allen',
		'data_nasc' => '10/07/1993',
	],
	[
		'nome' => 'Taylor Kinney',
		'data_nasc' => '04/09/1979',
	],
	[
		'nome' => 'Audrey Hepburn',
		'data_nasc' => '13/07/1972',
	],
];

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><pessoas></pessoas>');

echo "<pre>";
  print_r($xml);
foreach ($pessoas as $pessoa) {

$item = $xml->addChild('Pessoa');
$item->addChild('nome',$pessoa['nome']);
$item->addChild('nascimento',$pessoa['data_nasc']);


}
// echo $pessoa;
// echo $value['da'];
  // $xml->addChild([$pessoa]->$pessoa['nome']);
//   print_r($value);
//   // print_r($pessoa);





$xml->saveXML('pessoas.xml');
