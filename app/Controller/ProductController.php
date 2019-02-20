<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 19/02/2019
 * Time: 16:02
 */

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ProductController
{

    public function getProducts(Request $request, Response $response, array $args) : Response
    {

        $response = $response->withJson([
            "message"=>"Hello World"
        ]);

        return $response;

    }

}