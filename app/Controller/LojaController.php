<?php
/**
 * Created by PhpStorm.
 * User: als26
 * Date: 20/02/2019
 * Time: 20:29
 */

namespace App\Controller;


use App\DAO\Mysql\CodeeasyGerenciadorDeLojas\LojasDAO;
use App\Model\Mysql\CodeeasyGerenciadorDeLojas\LojaModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class LojaController
{

    public function getLojas(Request $request, Response $response, array $args) : Response
    {
        $lojasDAO = new LojasDAO();
        $lojas = $lojasDAO->getAllLojas();

        $response = $response->withJson($lojas);

        return $response;
    }

    public function insertLojas(Request $request, Response $response, array $args) : Response
    {

        $data = $request->getParsedBody();
        $lojasDAO = new LojasDAO();
        $loja = new LojaModel();


        $loja->setNome($data['nome'])
        ->setEndereco($data['endereco'])
        ->setTelefone($data['telefone']);

        $lojasDAO->insertLojas($loja);

        $response = $response->withJson([
            'message'=>'Loja inserida com sucesso'
        ]);

        return $response;
    }

    public function updateLojas(Request $request, Response $response, array $args) : Response
    {


        return $response;
    }

    public function deleteLojas(Request $request, Response $response, array $args) : Response
    {


        return $response;
    }

}