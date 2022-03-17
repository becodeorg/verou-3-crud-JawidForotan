<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once './config.php';
require_once './classes/DatabaseManager.php';
require_once './classes/CardRepository.php';


$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();
$cardRepository = new CardRepository($databaseManager);



// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)

$action = $_GET['action'] ?? null;
var_dump($action);

switch ($action) {
    case 'create':
        createElement($cardRepository);
        break;
    case 'edit':
        update();
        break;
    case 'delete':
        delete();
        break;
    default:
        overview($cardRepository);
        break;
}

function overview($cardRepository)
{
    require 'views/read.php';
}

function createElement($cardRepository)
{
    require"./views/create.php";

  
    $cardRepository->create();
  
    
}

function update()
{

}

function delete()
{

}