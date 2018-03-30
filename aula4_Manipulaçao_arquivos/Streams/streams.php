<?php

$google = fopen('https://www.google.com','r');

//permite aprire site dentro de php -- mais nao e iframe, so lee um arquivo ( o index), basicamente uma bosta, so traz linhas do arquivo
while (!feof($google)) {
  $linha = fgets($google);
  echo $linha;
}

//pode usar file:// ftp:// http:// php:// (buffer nativo do php, IO e errors)
