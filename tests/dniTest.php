<?php

use PHPUnit\Framework\TestCase;

final class dniTest extends TestCase{
    public function testDni(){
        $dni = new dni(25611044, "S");
        $this->assertTrue($dni-> isCorrectLetter());
    }

    public function testDni2(){
        $dni = new dni(25611044, "A");
        $this->assertFalse($dni-> isCorrectLetter());
    }

    public function testPonerLetraCorrecta(){
        $dni = new dni(25611044, "X");
        $dni-> calcLetter();
        $this->assertTrue($dni-> isCorrectLetter());
    }
    
}