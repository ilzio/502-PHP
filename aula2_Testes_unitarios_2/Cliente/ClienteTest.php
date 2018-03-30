<?php


//faz require do file que a gente quer testar
require_once 'Cliente.php';

use PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase
{
  public function testCriacaoCliente(){
    $cliente = new Cliente('Lucas', 19, 'lucas@lucas.com');
    $this->assertSame('Lucas', $cliente->getNome());
    $this->assertSame(19, $cliente->getIdade());
    $this->assertSame('lucas@lucas.com', $cliente->getEmail());
  }
}
