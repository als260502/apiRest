<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 20/02/2019
 * Time: 16:33
 */

namespace App\DAO\Mysql\CodeeasyGerenciadorDeLojas;


use App\Model\Mysql\CodeeasyGerenciadorDeLojas\LojaModel;

class LojasDAO extends Conexao
{
   public function __construct()
    {
        parent::__construct();

    }

    public function getAllLojas() :array{

       $lojas = $this->pdo
           ->query('SELECT id, nome, telefone, endereco FROM lojas')
           ->fetchAll(\PDO::FETCH_ASSOC);

       return $lojas;
    }

    public function insertLojas(LojaModel $loja) : void
    {
        $stmt = $this->pdo
            ->prepare('INSERT INTO lojas VALUES (
            null,
            :nome,
            :telefone,
            :endereco

            );');


        $stmt->execute([
            "nome"=>$loja->getNome(),
            "endereco"=>$loja->getEndereco(),
            "telefone"=>$loja->getTelefone(),
        ]);

    }



}