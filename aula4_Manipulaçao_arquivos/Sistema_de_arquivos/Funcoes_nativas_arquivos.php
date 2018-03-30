<?php

//PERMISSOES

    // //permissao de arquivo sempre precisa um 0 na frente
    chmod('../arquivo1.txt', 0755);

    // // alterar dono
    chown('../arquivo1.txt', 'developer');

    // //alterar grupo
    chgrp('../arquivo1.txt', 5);

// informacoes sobre o arquivo

    $arquivo = stat('../arquivo1.txt');
    echo "<pre>";
    print_r($arquivo);

//MANIPULACAO ARQUIVOS E PASTA

    //verificar se arquivo existe
    var_dump(file_exists('../arquivo1.txt')); //retorna boolean

    // buscar arquivos
    $arqs = glob('../*.txt'); //retorna um array com todos os arrays

    //criar pastas
    mkdir('../fotos');
    print_r($arqs);

    //criar novo arquivo
    touch("../Basicos/arquivo2.php");

    //removendo arquivo
    if (file_exists('../Basicos/arquivo2.php')){
      unlink('../Basicos/arquivo2.php');
    }

    //copiando
    copy('../arquivo.txt','copia.txt');
    //renomeando
    rename('copia.txt','copiaOutroNome.txt');
