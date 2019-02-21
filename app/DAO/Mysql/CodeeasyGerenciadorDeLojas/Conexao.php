<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 20/02/2019
 * Time: 16:32
 */

namespace App\DAO\Mysql\CodeeasyGerenciadorDeLojas;


abstract class Conexao
{
    /**
     * @var \PDO
     */
    protected $pdo;


    function __construct()
    {
        $host   =getenv('CODEEASY_GERENCIADOR_DE_LOJAS_MYSQL_HOST');
        $port   =getenv('CODEEASY_GERENCIADOR_DE_LOJAS_MYSQL_PORT');
        $user   =getenv('CODEEASY_GERENCIADOR_DE_LOJAS_MYSQL_USER');
        $pass   =getenv('CODEEASY_GERENCIADOR_DE_LOJAS_MYSQL_PASSWORD');
        $dbname =getenv('CODEEASY_GERENCIADOR_DE_LOJAS_MYSQL_DBNAME');

        $dsn  = "mysql:host={$host};dbname={$dbname};port={$port}";

        $this->pdo = new \PDO($dsn, $user, $pass);

        $this->pdo->setAttribute(
          \PDO::ATTR_ERRMODE,
          \PDO::ERRMODE_EXCEPTION
        );

    }

}