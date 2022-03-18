<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once './DB/config.php';
require_once './DB/database.php';
require_once './Model/card.php';


$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();


$cardRepository = new CardRepository($databaseManager);
//$card = $cardRepository->get();


$action = $_GET['action'] ?? null;

switch ($action) {
    case 'create':
        create($cardRepository);
        break;
    case 'update':
        update($cardRepository);
        break;
    case 'delete':
        delete($cardRepository);
        break;    
    default:
        read($cardRepository);
        break;
}

function read($cardRepository)
{
    require './View/read.php';
}

function create($cardRepository)
{
    if(!empty($_POST)){
        header("Location: index.php");
        $cardRepository->create();
    }
    require_once "./View/create.php";
    
}

function update($cardRepository){
    if(!empty($_POST)){
        header("Location: index.php");
        $cardRepository->update();
    }
    require_once "./View/update.php";
}

function delete($cardRepository){
    $cardRepository->delete();
    header("Location: index.php");
}




