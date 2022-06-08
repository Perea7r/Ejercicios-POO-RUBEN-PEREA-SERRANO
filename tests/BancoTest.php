<?php

use PHPUnit\Framework\TestCase;
use ITEC\Presencial\DAW\banco;
use ITEC\Presencial\DAW\cuenta;

final class bancoTest extends TestCase {
    public function DPtestCuentaConsultarDinero() {
        $cuenta1 = new cuenta("Ruben",1000,000001);
        $cuenta1 -> ingresoDinero(1000);
        $cuenta2 = new cuenta("David",2000,000002);
        $cuenta2 -> retirodinero(1000);

        return [
            "Cuenta1" => [1000 + 1000 , $cuenta1 -> saldo()],
            "Cuenta2" => [2000 - 1000, $cuenta2 -> saldo()]
        ];
    }

    /**
     * @dataProvider DPtestCuentaConsultarDinero
     */
    public function testCuentaConsultarDinero($esperado, $resultado) {
        $this -> assertEquals($esperado, $resultado);
    }

    public function DPtestBancoConsultarDinero() {
        return [
            "Banco" => [3000, banco::dineroTotal()]
        ];
    }

    public function testBancoConsultarDinero($esperado, $resultado) {
        $this -> assertEquals($esperado, $resultado);
    }
}

?>