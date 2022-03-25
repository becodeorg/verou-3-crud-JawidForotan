<?php

class CardRepository
{
    private DatabaseManager $databaseManager;

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }
    
    // Create
    public function create(): void
    {
        if(!empty($_POST["brand"]) && (!empty($_POST["model"]))){
                $brand = $_POST["brand"];
                $model = $_POST["model"];
                if(isset($_POST["submit"])){
                $sql = "INSERT INTO `car`(brand, model)
                VALUES('$brand', '$model')";
                $statement = $this->databaseManager->connection->prepare($sql);
                $statement->execute();
            }
        }
    }

    // Get one
    public function find($id): array
    {
        $sql = "SELECT * FROM `car` WHERE `id` = '$id'";
        $statement = $this->databaseManager->connection->prepare($sql);
        $statement->execute();
        $element = $statement->fetch();
        return $element;
    }

    // Get all
    public function get(): array
    {
        $sql = "SELECT * FROM car";
        $statement = $this->databaseManager->connection->prepare($sql);
        $statement->execute();
        $elements = $statement->fetchAll();
        return $elements;    
    }
    
    // Update
    public function update($id): void
    {
        $x = $this->find($id);
        if(isset($_POST['update'])){ 
            $brand = $_POST['brand']; 
            $model = $_POST['model'];
            $updateSql = "UPDATE `car` SET `id` = '$id', brand = '$brand', model = '$model' WHERE `car`.`id` = '$id' ";
            $updateStatement = $this->databaseManager->connection->prepare($updateSql);
            $updateStatement->execute();
        }
    }
    
    // Delete
    public function delete(): void
    {
        $sql ="DELETE FROM `car` WHERE (`id` = '{$_GET['id']}')";
        $statement =$this->databaseManager->connection->prepare($sql);
        $statement->execute();
    }
}