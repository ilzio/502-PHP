<?php

require_once 'Conexao.php';

$con = Conexao::getInstance();

echo "<pre>";

    $sql = "SELECT * FROM tb_alunos";
    $stmt = $con->query($sql);
    $stmt->execute();
    $pessoas=$stmt->fetchAll(PDO::FETCH_ASSOC);

    $xml = new SimpleXmlElement('<?xml version="1.0" encoding="UTF-8"?><pessoas></pessoas>');

    foreach ($pessoas as $pessoa) {
    $item = $xml->addChild('pessoa');
  	$item->addChild('id',$pessoa['id']);
  	$item->addChild('nome',$pessoa['nome']);
  	$item->addChild('email',$pessoa['email']);
    }

    $xml->saveXML('pessoas.xml');

    // header('Content-type: text/xml');

    echo $xml->asXML();


//criar xml com Dom

// $dom = new DOMDocument();
//
// foreach ($pessoas as $pessoa) {
// $dom->createElement('pessoa');
// $pessoaItem = $dom->getElementsByTagName('pessoa');
// $idItem= $dom->createElement('id',$pessoa['id']);
// $nomeItem = $dom->createElement('nome',$pessoa['nome']);
// $emailItem= $dom->createElement('email',$pessoa['email']);
//
// $pessoaItem->appendChild($idItem);
// $pessoaItem->appendChild($nomeItem);
// $pessoaItem->appendChild($emailItem);
// }

  //gerar json com dados do banco

  $json = json_encode($pessoas);
  //especifica o nome do arquivo e o conteudo ja encoded
  file_put_contents('pessoas.json', $json);
