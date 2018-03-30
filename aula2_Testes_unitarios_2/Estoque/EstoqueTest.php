<?php

require_once 'Estoque.php';

use PHPUnit\Framework\TestCase;

class EstoqueTest extends TestCase
{
    private $item;
    private $estoque;
//funcao nativa que sirve para criar o setup dos tests para repeticoes sem que ter que fazer isso a cada vez; Nesse caso a variavel estoque nao tem que ser instanciada a cada test
    public function setUp()
    {
      $this->estoque = new Estoque;
    }


    public function testAddItem()
    {
        $item = "blusa azul";
        $qtd = 5;


        $this->estoque->add($item, $qtd);

        $this->assertSame($qtd, $this->estoque->get($item));
    }

    public function testSomaQuantidades()
    {
        $item = "blusa azul";


        $this->estoque->add($item, 1);
        $this->estoque->add($item, 5);
        $this->estoque->add($item, 10);

        $this->assertSame(16, $this->estoque->get($item));
    }

    // teste para verificar si item existe no estoque, o PHP unit lee o comentario abaixo (chamado anotacao) e faz a verificaao

    /**
    * @expectedException InvalidArgumentException
    * @expectedExceptionMessage Item não existe no estoque
    */
    public function testItemInvalido()
    {

        $this->estoque->get('blusa X');
    }


    public function testRemoveQuantidade()
    {
        $item = "Blusa X";


        $this->estoque->add($item, 5);
        $this->estoque->add($item, 15);
        $this->estoque->add($item, 25);
        $this->estoque->remove($item, 20);

        $this->assertSame(25, $this->estoque->get($item));
    }
}
