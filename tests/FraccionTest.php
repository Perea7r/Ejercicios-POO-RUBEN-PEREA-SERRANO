<?php

use PHPUnit\Framework\TestCase;

final class FraccionTest extends TestCase{
    public function testFraccion(){
        $f1 = new Fraccion(1, 2);
        $this->assertEquals(1, $f1->getNumerador());
        $this->assertEquals(2, $f1->getDenominador());

        $f2 = new Fraccion(2, 3);
        $this->assertEquals(2, $f2->getNumerador());
        $this->assertEquals(3, $f2->getDenominador());

        $f3 = new Fraccion(3, 4);
        $this->assertEquals(3, $f3->getNumerador());
        $this->assertEquals(4, $f3->getDenominador());
    }
}

?>