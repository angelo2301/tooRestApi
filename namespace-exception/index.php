<?php
require 'app/lib/Session.php';
require 'app/model/UserModel.php';
require 'app/routes/UserRoute.php';
require 'app/provider/UserModel.php';

use App\Lib\Session;
use App\model\UserModel;
use App\routes\UserRoute;
use App\Provider\UserModel as U;

$session1 = new Session();
$session2 = new UserModel();
$session3 = new UserRoute();
$session4 = new U();

print_r($session4);
