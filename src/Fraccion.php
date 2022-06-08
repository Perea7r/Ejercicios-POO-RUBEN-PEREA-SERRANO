<?php

//clase fraccion con metodo suma, resta, multiplicar y dividir fracciones
class Fraccion{
    private $numerador;
    private $denominador;
    
    public function __construct($numerador, $denominador){
        $this->numerador = $numerador;
        $this->denominador = $denominador;
    }

    public function getNumerador(){
        return $this->numerador;
    }

    public function getDenominador(){
        return $this->denominador;
    } 
    
    public function suma($f1, $f2){
        $numerador = $f1->getNumerador() * $f2->getDenominador() + $f2->getNumerador() * $f1->getDenominador();
        $denominador = $f1->getDenominador() * $f2->getDenominador();
        return new Fraccion($numerador, $denominador);
    }
    
    public function resta($f1, $f2){
        $numerador = $f1->getNumerador() * $f2->getDenominador() - $f2->getNumerador() * $f1->getDenominador();
        $denominador = $f1->getDenominador() * $f2->getDenominador();
        return new Fraccion($numerador, $denominador);
    }
    
    public function multiplicar($f1, $f2){
        $numerador = $f1->getNumerador() * $f2->getNumerador();
        $denominador = $f1->getDenominador() * $f2->getDenominador();
        return new Fraccion($numerador, $denominador);
    }
    
    public function dividir($f1, $f2){
        $numerador = $f1->getNumerador() * $f2->getDenominador();
        $denominador = $f1->getDenominador() * $f2->getNumerador();
        return new Fraccion($numerador, $denominador);
    }

}
?>
