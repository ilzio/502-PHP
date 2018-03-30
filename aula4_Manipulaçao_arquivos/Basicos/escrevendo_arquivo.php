<?php

//jeito dificil
//se abrir em modo w sobrescreve o conteudo, usando o a faz um append
$arquivo = fopen('arquivo.txt', 'a');
//escrevendo com quebra de linha no arquivo
//php EOL independentemente do sistema operacional coloca a quebra de linha
fwrite($arquivo, 'Ola arquivo' . PHP_EOL);


//Jeito facil ->tem que especificar se nao quer sobrescrita de conteudo
file_put_contents('arquivo.txt', "end Of Life" . PHP_EOL, FILE_APPEND); //com quebra de linha e nao sobrescreve com FILE_APPEND
fclose($arquivo);
