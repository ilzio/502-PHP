<?php

// print_r($_SERVER['REQUEST_METHOD']);
//a superglobal $_SERVER contem todas as informacao da requisiçao, de isso vamos a pegar o verbo HTTP e fazer un switch para montar API

$verbo = $_SERVER['REQUEST_METHOD'];


switch ($verbo) {
  case 'GET':
    echo "listando alunos";
    break;

  case 'POST':
    echo "Criando aluno";
    break;

  case 'PUT':
    echo "Atualizando aluno";
    break;

  case 'DELETE':
    echo "removendo aluno";
    break;

  default:
    echo "invalido";
    break;
}
