<?php

use PHPUnit\Framework\TestCase;

final class fechasTest extends TestCase{
    public function testFechaCorrecta(){
        $f1 = new Fecha(7, 2, 1995);
        $this->assertTrue($f1->fechaCorrecta());
    }
    
    public function testFechaIncorrecta(){
        $f1 = new Fecha(7, 13, 1995);
        $this->assertFalse($f1->fechaCorrecta());
    }
    
    public function testFechaCorrecta2(){
        $f1 = new Fecha(6, 5, 2022);
        $this->assertTrue($f1->fechaCorrecta());
    }
    
    public function testFechaIncorrecta2(){
        $f1 = new Fecha(32, 4, 2121);
        $this->assertFalse($f1->fechaCorrecta());
    }
}

?>