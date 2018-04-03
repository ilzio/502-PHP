<?php

//expresoes para os seletores na pagina 111 mas basicamente

    // -> /cursos: todos os elementos do XML
    //
    // -> curso: retorno todo os elementos chamados "curso" que sao 3
    //
    // -> curso[@codigo=501]: o elemento curso que o atributo codigo é igual a 501
    //
    // -> curso[@codigo>=501]: o elemento curso que o atributo codigo é maior ou igual a 501
    //
    // -> tambem funcionam os dois pontos, como se fosse uma estrutura de pasta



$xml = simplexml_load_file('cursos.xml');

$curso501 = $xml->xpath("/cursos/curso[@codigo=501]");

echo "<pre>";

print_r($curso501);
// o arquivo xml e'o seguinte
 ?>
 <!--
<?xml version="1.0" encoding="UTF-8"?>
<cursos>
  <curso versao="1.0" codigo="500">
    <nome>Desenvolvimento WEB com PHP </nome>
      </curso>
  <curso versao="1.0" codigo="501">
    <nome>Desenvolvimento orientado a Objetos com PHP </nome>
      </curso>
  <curso versao="2.0" codigo="502">
    <nome>PHP ENTERPRISE </nome>
      </curso>
</cursos>

-->
