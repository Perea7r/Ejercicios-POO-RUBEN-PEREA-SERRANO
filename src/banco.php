<?php

namespace ITEC\Presencial\DAW;

class banco{

  
    private static float $dinero_del_banco = 0;

   
    public static function ingresarBanco(float $ingresos){
        self::$dinero_del_banco = self::$dinero_del_banco + $ingresos;
    }
   
    public static function retirarBanco(float $ingresos){
        self::$dinero_del_banco = self::$dinero_del_banco - $ingresos;
    }
    
    public static function dineroTotal(){
        return self::$dinero_del_banco;
    }
}

?>