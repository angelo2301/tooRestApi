<?php
require 'vendor/autoload.php';

$pdo = new PDO("mysql:host=localhost;port=3000;dbname=test", "root", "root");
$fpdo = new FluentPDO($pdo);

echo "<pre>";
var_dump($fpdo);
