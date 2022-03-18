<?php

class CardRepository
{
    private DatabaseManager $databaseManager;

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

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
    public function find()//: array
    {

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

    public function update(): void
    {
        if(isset($_POST['update'])){
            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $sql = "UPDATE `car` SET brand = '$brand', model = '$model' WHERE (`id` = '{$_GET['id']}')";
            $statement = $this->databaseManager->connection->prepare($sql);
            $statement->execute();
        }
    }

    public function delete(): void
    {
        $sql ="DELETE FROM `car` WHERE (`id` = '{$_GET['id']}')";
        $statement =$this->databaseManager->connection->prepare($sql);
        $statement->execute();
    }
}