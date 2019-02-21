<?php

use App\Controller\ProdutoController;
use App\Controller\LojaController;
use Slim\App;

$container = (new \Src\SlimConfiguration())->SlimConfiguration();

$app = new App($container);

$app->group('', function () use ($app){

$app->get('/loja', LojaController::class . ":getLojas");
$app->post('/loja', LojaController::class . ":insertLojas");
$app->put('/loja', LojaController::class . ":updateLojas");
$app->delete('/loja', LojaController::class . ":deleteLojas");

$app->get('/produto', ProdutoController::class . ":getProdutos");
$app->post('/produto', ProdutoController::class . ":insertProdutos");
$app->put('/produto', ProdutoController::class . ":updateProdutos");
$app->delete('/produto', ProdutoController::class . ":deleteProdutos");

})->add((new \Src\BasicAuth())->basicAuth());


$app->run();


