<?php

namespace App\Core\Database;

use PDO;
use Exception;

class QueryBuilder
{

    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function insert ($table, $parametros)
    {
        $sql = "INSERT INTO `{$table}` (`nome`,`descricao`,`categoria`,`preco`) VALUES ('{$parametros['nome']}','{$parametros['descricao']}','{$parametros['categoria']}','{$parametros['preco']}')";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }
    public function delete ($table, $id)
    {
        $sql = "DELETE FROM `{$table}` WHERE id = {$id}";
        

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function update ($table, $parametros, $id)
    {
        $sql = "UPDATE `{$table}` SET `nome`='{$parametros['nome']}',`descricao`='{$parametros['descricao']}',`categoria`='{$parametros['categoria']}', `preco`='{$parametros['preco']}' WHERE id = {$id}";
        

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

}
    //Aqui vão as funções de manipulação da base de dados
    //Essas funções rodam comandos SQL

