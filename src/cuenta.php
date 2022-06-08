<?php

namespace ITEC\Presencial\DAW;

class cuenta {
   private string $nombre;
   private float $saldo;
   private int $numCuenta;
   private static float $saldoCuentas;

   public function __construct( string $nombre, float $saldo, int $numCuenta){

       $this->nombre = $nombre;
       $this->saldo = $saldo;
       $this->numCuenta = $numCuenta;
       self::$saldoCuentas += $saldo;
   }
  
   public function retiroDinero(float $retirada_dinero){
       $this->saldo = $this->saldo - $retirada_dinero;
       self::$saldoCuentas = self::$saldoCuentas - $retirada_dinero;

   }

   public function ingresoDinero(float $ingreso_dinero){
       $this->saldo = $this->saldo + $ingreso_dinero;
       self::$saldoCuentas = self::$saldoCuentas + $ingreso_dinero;
   }

   public function saldo(){
       return $this->saldo;
   }
}

   ?>