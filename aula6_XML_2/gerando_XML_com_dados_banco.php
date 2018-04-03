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
