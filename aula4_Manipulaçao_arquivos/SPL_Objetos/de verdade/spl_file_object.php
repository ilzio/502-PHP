<?php

//classe nativa SplFileObject

$arquivo = new SplFileObject('../../Basicos/arquivo1.txt');
//como ler o arquivo, igual as funcoes nativas
while (!$arquivo->eof()) {
  $linha = $arquivo->fgets();
  echo nl2br($linha);
}

//outra manera de fazer o arquivo, percorre ele como array e retorna linhas

 foreach ($arquivo as $linha) {
   echo nl2br($linha);
 }
