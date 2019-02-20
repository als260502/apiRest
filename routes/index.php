<?php

use App\Controller\ProductController;
use Slim\App;

$container = (new \Src\SlimConfiguration())->SlimConfiguration();

$app = new App($container);

$app->get('/', ProductController::class . ':getProducts');




$app->run();


