<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{

    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertUsuarios ($table, $parametros)
    {
        $sql = "INSERT INTO `{$table}` (`nome`,`email`,`senha`,`foto`) VALUES ('{$parametros['nome']}','{$parametros['email']}','{$parametros['senha']}','{$parametros['foto']}')";
        //$sql = "INSERT INTO `{$table}` (`nome`, `email`) VALUES ('Barney Stinson', 'barneyincrivel@himym.com')";

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

    public function updateUsuarios ($table, $parametros, $id)
    {
        //$sql = "INSERT INTO `{$table}` (`nome`,`email`,`senha`) VALUES ('{$parametros['nome']}','{$parametros['email']}','{$parametros['senha']}')";
        //$sql = "UPDATE `usuarios` SET `id`='[value-1]',`nome`='[value-2]',`email`='[value-3]',`senha`='[value-4]' WHERE 1";
        $sql = "UPDATE `{$table}` SET `nome`='{$parametros['nome']}',`email`='{$parametros['email']}',`senha`='{$parametros['senha']}',`foto`='{$parametros['foto']}' WHERE id = {$id}";
        

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function insertCategorias ($table, $parametros)
    {
        $sql = "INSERT INTO `{$table}` (`categoria`) VALUES ('{$parametros['categoria']}')";
        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function updateCategorias ($table, $parametros, $id)
    {
        $sql = "UPDATE `{$table}` SET `nome`='{$parametros['nome']}' WHERE id = {$id}";
        

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
            
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function insertProdutos ($table, $parametros)
    {
        $sql = "INSERT INTO {$table} (nome,descricao,categoria,preco,foto) VALUES ('{$parametros['nome']}','{$parametros['descricao']}','{$parametros['categoria']}','{$parametros['preco']}','{$parametros['foto']}')";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function updateProdutos ($table, $parametros, $id)
    {
        $sql = "UPDATE {$table} SET nome='{$parametros['nome']}',descricao='{$parametros['descricao']}',categoria='{$parametros['categoria']}', preco='{$parametros['preco']}', foto='{$parametros['foto']}' WHERE id = {$id}";


        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    //Aqui vão as funções de manipulação da base de dados
    //Essas funções rodam comandos SQL

}
