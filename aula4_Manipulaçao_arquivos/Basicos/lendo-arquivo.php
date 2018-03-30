<?php

$arquivo = fopen('arquivo.txt', 'r');
//jeito dificil
      // while (!feof($arquivo)) { //enquanto nao for final do arquivo fof (file end of file)
      //   $linha  =fgets($arquivo); //fgets pega linha do arquivo
      //   echo nl2br($linha); // nl2br converts line break of file to <br> at the end of line
      // }

//jeito facil
    // echo "<hr>";
    // $arquivo = file_get_contents('arquivo.txt'); //so abre no modo leitura
    // echo nl2br($arquivo);

//para evitar que, se o arquivo for muito grande, estora a memoria do computador, se abre o arquivo em pedaços com fread

//fread pega 2 parametros, o arquivo e o tamanho em bites do pedaço que a gente quer retornar

//para saber o tamanho do arquivo

$tamanho = filesize('arquivo.txt');

echo "tamanho " . $tamanho . ' bites <br>';

while (($pedaco = fread($arquivo, 5)) != false) { //para ler o arquivo enteiro, enquanto tem conteudo retorna verdadeiro
  echo nl2br($pedaco);
  // die();
}

fclose($arquivo);
