<?php

require_once 'Estoque.php';

use PHPUnit\Framework\TestCase;

class EstoqueTest extends TestCase
{
  private $item;

public function testAddItem(){
  $item = "blusa azul";
  $qtd = 5;

  $estoque = new Estoque();
  $estoque->add($item,$qtd);

  $this->assertSame($qtd,$estoque->get($item));
}

}
