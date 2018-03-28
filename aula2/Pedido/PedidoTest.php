<?php

require_once 'Pedido.php';

use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase
{
    private $estoque;

// setup inicial de cada teste (cada funcao, por exemplo o atributo $estoque que e da classe deve ser definido fora, para a classe toda)

    public function setUp()
    {
      // criar "Objetos duble'" qual e' o comportamento da classe estoque dentro do teste. Classe pedido depende da classe estoque, se o estoque nao funciona, quando executamos o teste no pedido vai falhar. Criamos um 'mock' da classe para definir o comportamento dela

      $this->estoque = $this->getMockBuilder('Estoque')->getMock();
      $this->estoque->add('Blusa X', 10);
      $this->estoque->add('Blusa Y', 5);

    }





    public function testDeveFecharPedido()
    {

      $item = 'Blusa X';
      $qtd = 10;

//o estoque vai executar uma vez (once)o metodo GET com os parametros with(), will() e' usado pro retorno

      $this->estoque->expects($this->once())
          ->method("get")
          ->with($this->equalTo($item))
          ->will($this->returnValue($qtd));

      $this->estoque->expects($this->once())
          ->method("remove")
          ->with(
                $this->equalTo($item),
                $this->equalTo($qtd)
              );

        $pedido = new Pedido($item, $qtd);
        $pedido->fechar($this->estoque);
        $this->assertTrue($pedido->isFinalizado());
      // $pedido = new Pedido('Blusa X', 4);
      // $pedido->fechar($this->estoque);
      // $this->assertTrue($pedido->isFinalizado());
      // $this->assertSame(6, $this->estoque->get('Blusa X'));
    }
}

//     public function
//
//     // public function testNome()
//     // {
//     // }
//     // public function testNome()
//     // {
//     // }
// }
