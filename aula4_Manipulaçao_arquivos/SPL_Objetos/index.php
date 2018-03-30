<?php

require_once 'meuArquivo.php';
echo "<pre>";
$arquivo = new MeuArquivo('../Basicos/arquivo1.txt');
print_r($arquivo->pegaTamanho());
print_r($arquivo->pegaNomeArquivo());
print_r($arquivo->pegaConteudo());
print_r($arquivo->pegaExtensao());
