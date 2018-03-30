<?php

class Estoque
{

  //cria um array vazio
    private $itens=[];

    //adiciona $itens como indice e $qtd como valor
    public function add($item, $qtd)
    {
        if (isset($this->itens[$item])) {
            $qtd += $this->itens[$item];
        }
        $this->itens[$item] = $qtd;
    }

    //pega a quantidade pegando o valor da chave $item do array $itens
    // public function get($item){
    //   return $this->itens[$item];
    // }

    public function get($item)
    {
        if (isset($this->itens[$item])) {
            return $this->itens[$item];
        } else {
            throw new InvalidArgumentException("Item não existe no estoque", 1);
        }
    }

    public function remove($item, $qtd)
    {
        if (isset($this->itens[$item])) {
        $this->itens[$item] -= $qtd;
          // nao precisa de return, como no caso do get, a gente ta so eliminando

          // unset($this->itens[$item]);

        } else {
          // throw new InvalidArgumentException("Item não existe no estoque", 1);
          echo "nao tem \"$item\" no estoque <br>";
        }
    }



}

// $e = new Estoque();
//
// // var_dump($e);
//
// $e->add('blusa azul', 1);
// $e->add('blusa azul', 5);
// $e->add('blusa azul', 10);
// $e->add('blusa verde', 52);
// echo "<pre>";
//
//
// $e->get('blusa azul');
//
//
// print_r($e);
//
// echo "<br> <hr>";
//
// $e->remove('blusa azul', 5);
//
// print_r($e);
