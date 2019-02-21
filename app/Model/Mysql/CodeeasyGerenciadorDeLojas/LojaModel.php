<?php
/**
 * Created by PhpStorm.
 * User: als26
 * Date: 20/02/2019
 * Time: 21:02
 */

namespace App\Model\Mysql\CodeeasyGerenciadorDeLojas;


final class LojaModel
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $nome;
    /**
     * @var string
     */
    private $telefone;
    /**
     * @var string
     */
    private $endereco;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNome() : string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getTelefone() : string
    {
        return $this->telefone;
    }

    /**
     * @return string
     */
    public function getEndereco() : string
    {
        return $this->endereco;
    }

    /**
     * @param string $nome
     * @return LojaModel
     */
    public function setNome(string $nome): LojaModel
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @param string $telefone
     * @return LojaModel
     */
    public function setTelefone(string $telefone): LojaModel
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @param string $endereco
     * @return LojaModel
     */
    public function setEndereco(string $endereco): LojaModel
    {
        $this->endereco = $endereco;
        return $this;
    }


}