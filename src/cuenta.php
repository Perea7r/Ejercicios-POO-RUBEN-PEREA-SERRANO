<?php

namespace ITEC\Presencial\DAW;

class cuenta extends banco{
    private string $nombre;
    private int $nCuenta;
    private float $saldo;
    private static float $saldoCuentas=0;

    public function __construct(int $nCuenta, string $nombre, float $saldo){
        $this->nombre=$nombre;
        $this->nCuenta=$nCuenta;
        $this->saldo=$saldo;
        self::$saldoCuentas+=$saldo;
    }

    public function ingresarDinero(float $cantidad){
        $this->saldo += $cantidad;
        self::$saldoCuentas += $cantidad;
    }

    public function sacarDinero(float $cantidad){
        $this->saldo -= $cantidad;
        self::$saldoCuentas -= $cantidad;
    }

    public static function saldoTotalCuentas(){ 
        return self::$saldoCuentas;
    }

    public function consultarSaldo(){
        return $this->saldo;
    }
}