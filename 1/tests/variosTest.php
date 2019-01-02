<?php
use PHPUnit\Framework\TestCase;
require_once('./src/varios.php');
require_once('./src/Email.php');

final class variosTest extends TestCase
{

    public function testSumar(){
        $this->assertEquals(10 ,varios::sumar(5,5));
    }

    public function testArreglo(){
        $this->assertTrue(is_array(varios::Arreglo()));
    }

    public function testArregloVacio(){
        $this->assertEmpty([]);
    }

    public function testValor(){
        $this->assertSame("8",varios::valor("8"));
    }

    public function testInf(){
      $this->assertInfinite(varios::inf());
    }

    public function testIns(){
        $this->assertSame(Email::class,varios::ins());
    }


}
?>
