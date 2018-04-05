<?php


require 'alunos.php';

$alunos = new Alunos();


$dados = file_get_contents("php://input");

$dados = json_decode($dados, true);

switch ($dados['method']) {
  case 'inserir':
    echo "inserindo <br>";
    print_r($dados);
    break;

  default:
    echo "problema";
    break;
}
