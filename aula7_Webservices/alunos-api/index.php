<?php

require 'alunos.php';

// echo $_GET['id'];


$method = $_SERVER['REQUEST_METHOD'];

$alunos = new Alunos();

switch ($method) {
  case 'GET':
  $id = isset($_GET['id']) ? $_GET['id'] : null;

  if ($id) {
      $result = $alunos->find($id);
  } else {
      $result = $alunos->all();
  }

if ($result) {
    //manipulando o status code da applicaçao
    header('http:/1.1 200');
    //especificando o tipo de conteudo e codificaçao do resultado
    header('Content-type:application/json; charset=UTF-8');
    echo json_encode([
    "status" => "ok",
    "data" => $result,
    "message" => ""
  ]);
} else {
    header('http:/1.1 204');
    header('Content-type:application/json; charset=UTF-8');
    echo json_encode([
    "status" => "erro",
    "data" => "",
    "message" => "dados nao encontrados"
  ]);
}

break;

case 'POST':
//pega o conteudo da requisiçao
$dados = file_get_contents("php://input");

//decodifica em array
$dados = json_decode($dados, true);
$result = $alunos->insert($dados);
header('http:/1.1 201');
header('Content-type:application/json; charset=UTF-8');
echo json_encode([
"status" => "ok",
"data" => $result,
"message" => "salvou"
]);


break;


  case 'PUT':
  $dados = file_get_contents("php://input");
  //decodifica em array
  $dados = json_decode($dados, true); //sem true retorna objeto

  $result = $alunos->update($dados);
  header('http:/1.1 201');
  header('Content-type:application/json; charset=UTF-8');
  echo json_encode([
  "status" => "ok",
  "data" => $result,
  "message" => "salvou"
  ]);

    break;

  case 'DELETE':
  $dados = file_get_contents("php://input");
  //decodifica em array
  $dados = json_decode($dados, true); //sem true retorna objeto

  $result = $alunos->delete($dados);
  header('http:/1.1 201');
  header('Content-type:application/json; charset=UTF-8');
  echo json_encode([
  "status" => "ok",
  "data" => $result,
  "message" => "deletou"

    break;

  default:
    header('http:/1.1 404');
    break;
}
