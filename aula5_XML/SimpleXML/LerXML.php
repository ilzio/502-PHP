
<?php

//SIMPLEXML permite transformar XML em um objeto


// tem que instalar extensao php7.0-xml!!!

echo "<pre>";

// METODO 1 = lendo XML de uma string que contem o XML

$xml = <<<'XML'
<?xml version="1.0" encoding="UTF-8"?>
 <apostilas>
  <apostila versao="1.0">
    <titulo>Desenvolvimento WEB com PHP </titulo>
    <topicos>
      <topico> Configuraçao de ambiente </topico>
      <topico> Fundamentos da lenguagem PHP </topico>
    </topicos>
  </apostila>
</apostilas>
XML;

//criacao do objeto usando a variavel como parametro
$apostilas = new SimpleXMLElement($xml);

print_r($apostilas);

echo "<br> <hr>";

//agora e' possivel acessar os atributos do objeto como qualquer objeto

echo 'Titulo :' .  $apostilas->apostila->titulo . '<br>';
echo 'Topico 1 :' . $apostilas->apostila->topicos->topico[0] . '<br>';
echo 'Topico 2 :' . $apostilas->apostila->topicos->topico[1] . '<br>';
