<?php
require 'vendor/autoload.php';
require 'app/lib/Auth.php';

use App\Lib\Auth;

$data = [
    'id' => 1,
    'name' => 'Eduardo'
];

$token = Auth::SignIn($data);

try {
    Auth::Check(null);
    echo 'ok';
} catch (\Exception $e) {
    print_r($e->getMessage());
}
