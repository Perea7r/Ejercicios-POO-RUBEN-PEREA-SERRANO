<?php

class dni {
    private int $numero;
    private string $letra;

    public function __construct(int $numero = 00000000, string $letra = "A") {
        $this -> numero = $numero;
        $this -> letra = $letra;
    }

    private function giveLetter() {
        return substr("TRWAGMYFPDXBNJZSQVHLCKE", $this -> numero % 23, 1);
    }

    public function calcLetter() {
        return $this -> letra = $this -> giveLetter();
    }

    public function isCorrectLetter() {
        return $this -> letra == $this -> giveLetter();
    }
}
?>