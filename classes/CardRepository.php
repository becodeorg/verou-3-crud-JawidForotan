<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(): void
    {
        
            if(!empty($_POST["brand"]) && (!empty($_POST["model"]) && (!empty($_POST["color"])) &&(!empty($_POST["price"])))){
                 $brand = $_POST["brand"];
                 $model = $_POST["model"];
                 $color = $_POST["color"];
                 $price = $_POST["price"];
                if(isset($_POST["submit"])){
                $sql = "INSERT INTO `car`(brand, model, color, price)
                VALUES('$brand', '$model', '$color', '$price')";
                $statement = $this->databaseManager->connection->prepare($sql);
                $statement->execute();
            }
        }
    }   

    // Get one
    // public function find(): array
    // {
        
    // }

    // Get all
    public function get(): array
    {
        // TODO: replace dummy data by real one
        return [
            ['name' => 'dummy one'],
            ['name' => 'dummy two'],
        ];

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update(): void
    {

    }

    public function delete(): void
    {

    }

}