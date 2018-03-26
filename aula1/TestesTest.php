<?php


//inclui a classe TestCase
use PHPUnit\Framework\TestCase;

//crear uma clase que extende TestCase, o nome com com suffixo -Test

class TestesTest extends TestCase
{
    // //metodo publico com prefixo test- verifica se e' identico
    public function testSame()
    {
        $soma = 2+2;
        //ta querendo testar que a variavel $soma e' identico a 4

        $this->assertSame(4, $soma);
    }
    // //metodo publico com prefixo test- verifica se e' verdadeiro (qualquer true)
    public function testTrue()
    {
        $verdadeiro = true;
        $this->assertTrue($verdadeiro);
    }
    public function testFalse()
    {
        $falso = false;
        $this->assertFalse($falso);
    }

    //verifica as quantidades, nesse caso de indices no array especificado
    //tem duas assertions no mesmo teste
    public function testCount()
    {
        $array = ['a', 1, true];

        $count = count($array);
        $this->assertSame(3, $count);

        $this->assertCount(3, $array);
    }

    public function testEmpty()
    {
        $empty = array();
        $empty1 = 0;
        $empty2 = "";
        $empty3 = false;
        $this->assertEmpty($empty);
        $this->assertEmpty($empty1);
        $this->assertEmpty($empty2);
        $this->assertEmpty($empty3);
    }

    public function testNull()
    {
        $vazio = null;
        $this->assertNull($vazio);
    }
    public function testEquals()
    {
        $um = '0';
        $dois = 0;
        $this->assertEquals($um, $dois);
    }
}


//no terminal acessar a pasta aonde fica o arquivo e de la executar:
// phpunit --colors TestesTest.php
