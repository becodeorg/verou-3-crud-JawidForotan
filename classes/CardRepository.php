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
           
            if(!empty($_GET["brand"]) && (!empty($_GET["model"]) && (!empty($_GET["color"])) &&(!empty($_GET["price"])))){
                 $brand = $_GET["brand"];
                 $model = $_GET["model"];
                 $color = $_GET["color"];
                 $price = $_GET["price"];
                if(isset($_GET["submit"])){
                $sql = "INSERT INTO `car`(brand, model, color, price)
                VALUES('$brand', '$model', '$color', '$price')";
                $statement = $this->databaseManager->connection->prepare($sql);
                $statement->execute();
            }
        }
    }   

    //Get one
    // public function find($id): array
    // {
    //     $query = "SELECT * FROM car WHERE :id = $id";
    // }

    // Get all
    public function get()
    {
        $sql = "SELECT * FROM car";
        $connection = $this->databaseManager->connection->prepare($sql);
        $connection->execute();
        $elements = $connection->fetchAll();
        return $elements;
    }

    public function update(): void
    {

    }

    public function delete(int $id): void
    {
       $sql = "DELETE FROM car WHERE id = :id";
       $connection = $this->databaseManager->connection->prepare($sql);
       $connection->execute([":id" => $id]);
    }
}