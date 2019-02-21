<?php
/**
 * Created by PhpStorm.
 * User: als26
 * Date: 20/02/2019
 * Time: 22:18
 */

namespace Src;


use Tuupola\Middleware\HttpBasicAuthentication as Auth;


class BasicAuth
{


    public function basicAuth() : Auth
    {
        return new Auth([
           "users"=>[
               'root'=>'teste123'
           ]
        ]);

    }


}