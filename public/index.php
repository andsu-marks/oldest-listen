<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$app->get('/', function ($request, $response) {
    $response->getBody()->write('Slim Tá On!');

    return $response;
});

$app->run();
