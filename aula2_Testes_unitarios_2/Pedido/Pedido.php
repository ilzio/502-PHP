<?php

require_once '../Estoque/Estoque.php';

 /**
  *
  */
 class Pedido
 {
    private $item;
    private $quantidade;
    private $finalizado = false;

     public function __construct(string $item, int $qtd)
     {
         $this->item = $item;
         $this->qtd = $qtd;

     }

//estoque recebe objeto estoque
// usa sempre THIS item, porque e do pedido

     public function fechar(Estoque $estoque)
     {
       if ($estoque->get($this->item) >= $this->qtd) {
          $this->finalizado = true;
          $estoque->remove($this->item, $this->qtd);
       } else {

       }
     }

     public function isFinalizado()
     {
       return $this->finalizado;
     }
 }
