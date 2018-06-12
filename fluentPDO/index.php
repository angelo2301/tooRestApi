<?php
require 'vendor/autoload.php';
require 'app/model/UserModel2.PHP';
require 'app/lib/Database.PHP';

use App\Model\UserModel2;

$user = new UserModel2();

echo "<pre>";
print_r($user->prueba());
