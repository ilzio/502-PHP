<?php

class Estoque
{

  //cria um array vazio
  private $itens=[];

//adiciona $itens como indice e $qtd como valor
  public function add($item,$qtd){
    if (isset($this->itens[$item])){
      $qtd += $this->itens[$item];
    }
    $this->itens[$item] = $qtd;


  }

  //pega a quantidade pegando o valor da chave $item do array $itens
  public function get($item){
    return $this->itens[$item];
  }
}

$e = new Estoque();

// var_dump($e);

$e->add('blusa azul',1);
$e->add('blusa azul',5);
$e->add('blusa azul',10);
$e->add('blusa verde',52);
echo "<pre>";


$e->get('blusa azul');


print_r($e);
