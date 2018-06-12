<?php
namespace App\Lib;

use PDO;
use FluentPDO;
use PDOException;

class Database{
    public static function StartUp(){
        try
        {
        	$pdo = new PDO('mysql:dbname=test;host=localhost:8889', 'root', 'root');
        	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return new FluentPDO($pdo);
        }
        catch(PDOException $e)
        {
        	die($e->getMessage());
        }
    }
}
