<?php
    class Fecha {
        private $dia;
        private $mes;
        private $año;

        public function __construct($dia, $mes, $año) {
            $this->dia = $dia;
            $this->mes = $mes;
            $this->año = $año;
        }

        public function getDia() {
            return $this->dia;
        }

        public function getMes() {
            return $this->mes;
        }

        public function getAño() {
            return $this->año;
        }

        public function fechaCorrecta() {
            if ($this->dia < 1 || $this->dia > 31) {
                return false;
            }

            if ($this->mes < 1 || $this->mes > 12) {
                return false;
            }

            if ($this->año < 1) {
                return false;
            }

            if ($this->mes == 4 || $this->mes == 6 || $this->mes == 9 || $this->mes == 11) {
                if ($this->dia > 30) {
                return false;
                }
            }

            if ($this->mes == 2) {
                if ($this->dia > 29) {
                return false;
                }

                if ($this->dia == 29) {
                    if ($this->año % 4 != 0) {
                    return false;
                    }
                }
            }

            return true;
        }

        public function __toString() {
            return $this->dia . "/" . $this->mes . "/" . $this->año;
        }

        public function siguienteDia() {
            if ($this->fechaCorrecta()) {
                $this->dia++;
            }
        }
    }
?>