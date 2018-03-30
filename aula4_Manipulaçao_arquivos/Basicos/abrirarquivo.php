<?php

// $arquivo = fopen('nome arquivo' 'modo de abertura de arquivo')
    // pode ser r r+ w w+ a a+ x x+ explicados na pag 55 apostila

$arquivo = fopen('arquivo.txt', 'w');



fclose($arquivo); //quando abrir arquivo, stream e' aberto entre esse arquivo e o arquivo, tem que fechar ele
