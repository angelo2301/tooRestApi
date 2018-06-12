<?php
namespace App\Lib;

use Exception;
class Matematicas{
    public static function sumar($a, $b){
        if (!is_int($a) || !is_int($b)) {
            throw new Exception("No es un numero");
        }
        echo $a + $b;
    }
};

try {
    Matematicas::sumar("2", 5);
} catch (Exception $e) {
    var_dump($e);
}
