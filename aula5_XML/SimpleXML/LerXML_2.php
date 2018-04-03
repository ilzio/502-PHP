<?php

//METODO 2 Carregar XML armazenado em um arquivo

$apostilas = new SimpleXMLElement('apostilas.xml', null, true);

//constructor do SimpleXMLElement requer os seguintes argumentos ('caminho-do-arquivo.xlm', options, data_is_url, ns, is_prefix)
echo "<pre>";
// print_r($apostilas);

echo "<hr>";
echo "Apostila 1";
echo "<br>";
echo "<br>";
echo 'Titulo :' .  $apostilas->apostila[0]->titulo . '<br>';
echo 'Topico 1 :' . $apostilas->apostila[0]->topicos->topico[0] . '<br>';
echo 'Topico 2 :' . $apostilas->apostila[0]->topicos->topico[1] . '<br>';
echo "<hr>";
echo "Apostila 2";
echo "<br>";
echo "<br>";

echo 'Titulo :' .  $apostilas->apostila[1]->titulo . '<br>';
echo 'Topico 1 :' . $apostilas->apostila[1]->topicos->topico[0] . '<br>';
echo 'Topico 2 :' . $apostilas->apostila[1]->topicos->topico[1] . '<br>';
echo " <hr>";
echo "Apostila 3"; 
echo "<br>";
echo "<br>";
echo 'Titulo :' .  $apostilas->apostila[2]->titulo . '<br>';
echo 'Topico 1 :' . $apostilas->apostila[2]->topicos->topico[0] . '<br>';
echo 'Topico 2 :' . $apostilas->apostila[2]->topicos->topico[1] . '<br>';
