<?php
$mw = function ($request, $response, $next) {
    $response->getBody()->write('BEFORE');

        $response = $next($request, $response);

    $response->getBody()->write('AFTER');

    return $response;
};
