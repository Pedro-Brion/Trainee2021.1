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

    public function selectAll2($table)
    {
        $sql="select * from {$table} ";

        

        return $sql;
    }
    


    public function selectAllPaginacao($limite, $produtos2)
    {
        $sql = $produtos2;

        $sql = $sql . $limite;

        $statement = $this->pdo->prepare("{$sql}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById($table, $id)
    {
        $statement = $this->pdo->prepare("select * from {$table} WHERE id = {$id}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertUsuarios ($table, $parametros)
    {
        $sql = "INSERT INTO `{$table}` (`nome`,`email`,`senha`,`foto`) VALUES ('{$parametros['nome']}','{$parametros['email']}','{$parametros['senha']}','{$parametros['foto']}')";

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
        $sql = "UPDATE {$table} SET categoria='{$parametros['categoria']}' WHERE id = {$id}";
        //$sql = "UPDATE {$table} SET nome='{$parametros['nome']}',descricao='{$parametros['descricao']}',categoria='{$parametros['categoria']}', preco='{$parametros['preco']}', foto='{$parametros['foto']}' WHERE id = {$id}";
        

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

    public function buscar ($table, $buscar)
    {
        
        $sql = "SELECT * FROM {$table} WHERE nome LIKE '%".$buscar."%'";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function buscar2 ($table, $buscar)
    {
        return "SELECT * FROM {$table} WHERE nome LIKE '%".$buscar."%'";
    }

    public function filtrar ($table, $filtro)
    {
        
        $sql = "SELECT * FROM {$table} WHERE categoria";
        $contador = 0;
        $contador2 = count($filtro); 

        foreach ($filtro as $contador => $categoria)
        {
            $sql .= " LIKE '$categoria' ";
            if($contador < $contador2-1){
                $sql .= "OR categoria";
            }
            
            
        }

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function filtrar2 ($table, $filtro)
    {
        
        $sql = "SELECT * FROM {$table} WHERE categoria ";
        $contador = 0;
        $contador2 = count($filtro); 

        foreach ($filtro as $contador => $categoria)
        {
            $sql .= " LIKE '$categoria' ";
            if($contador < $contador2-1){
                $sql .= "OR categoria";
            }
            
            
        }

        return $sql;

    }

    public function buscarFiltrar ($table, $buscar, $filtro)
    {
        $sql = "SELECT * FROM {$table} WHERE nome LIKE '%".$buscar."%'";
        
        $sql .= " AND ( categoria ";

        $contador = 0;
        
        foreach ($filtro as $contador => $categoria)
        {
            $sql .= " LIKE '$categoria' ";
            $sql .= "OR categoria";
        } 

        $sql .= " )";
        
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function buscarFiltrar2 ($table, $buscar, $filtro)
    {
        $sql = "SELECT * FROM {$table} WHERE nome LIKE '%".$buscar."%'";
        
        $sql .= " AND ( categoria ";

        $contador = 0;
        
        foreach ($filtro as $contador => $categoria)
        {
            $sql .= " LIKE '$categoria' ";
            $sql .= "OR categoria";
        } 

        $sql .= " )";

        return $sql;

    }
}
