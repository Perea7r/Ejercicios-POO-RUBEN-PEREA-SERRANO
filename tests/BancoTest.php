<?php

use PHPUnit\Framework\TestCase;
use ITEC\Presencial\DAW\banco;
use ITEC\Presencial\DAW\cuenta;

final class BancoTest extends TestCase {
    public function DPcuentaSaldoTest() {
        $cuentaBanco = new cuenta(1221, "prueba", 1000);
        $esperado = 1000;
        $cuentaBanco1 = new cuenta(1221, "prueba1", 2000);
        $cuentaBanco1->ingresarDinero(400);
        $esperado1=2400;
        $cuentaBanco2 = new cuenta(1221, "prueba2", 3000);
        $cuentaBanco2->sacarDinero(200);
        $esperado2=2794;
        $esperado3=6194;
        return [
            "saldoCuenta" => [$esperado, $cuentaBanco->consultarSaldo()],
            "saldoCuenta1" => [$esperado1, $cuentaBanco1->consultarSaldo()],
            "saldoCuenta2" => [$esperado2, $cuentaBanco2->consultarSaldo()],
            "saldoCuentas" => [$esperado3, cuenta::saldoTotalCuentas()],
        ];
    }
    /**
     * @dataProvider DPcuentaSaldoTest
     */
    public function testcuentaSaldo($esperado, $actual) {
        $this -> assertEquals($esperado, $actual);
    }

}


?>