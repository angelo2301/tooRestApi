<?php

use Slim\Http\Request;
use Slim\Http\Response;


$app->get('/', function ($request, $response, $args) {
	$response->getBody()->write(' Hello ');
    echo $this->mensaje;
    return $response;
})->add($mw);
